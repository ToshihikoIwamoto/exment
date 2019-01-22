<?php

namespace Exceedone\Exment\Model;
use Exceedone\Exment\ColumnItems;
use Exceedone\Exment\Services\DynamicDBHelper;
use Exceedone\Exment\Enums\FormColumnType;
use Exceedone\Exment\Enums\ColumnType;
use Exceedone\Exment\Enums\CalcFormulaType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CustomColumn extends ModelBase implements Interfaces\TemplateImporterInterface
{
    use Traits\UseRequestSessionTrait;
    use Traits\AutoSUuidTrait;
    use Traits\DatabaseJsonTrait;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $casts = ['options' => 'json'];

    protected $guarded = ['id', 'suuid'];

    public function custom_table()
    {
        return $this->belongsTo(CustomTable::class, 'custom_table_id');
    }

    public function custom_form_columns()
    {
        return $this->hasMany(CustomFormColumn::class, 'form_column_target_id')
            ->where('form_column_type', FormColumnType::COLUMN);
    }

    public function custom_view_columns()
    {
        return $this->hasMany(CustomViewColumn::class, 'view_column_target_id');
    }

    public function scopeIndexEnabled($query)
    {
        return $query->whereIn('options->index_enabled', [1, "1", true]);
    }

    public function scopeUseLabelFlg($query)
    {
        return $query
            ->whereNotIn('options->use_label_flg', [0, "0"])
            ->orderBy('options->use_label_flg');
    }

    public function getColumnItemAttribute(){
        return ColumnItems\CustomItem::getItem($this);
    }

    /**
     * get custom column eloquent. (use table)
     */
    public static function getEloquent($column_obj, $table_obj = null)
    {
        if (!isset($column_obj)) {
            return null;
        }

        // get column eloquent model
        if ($column_obj instanceof CustomColumn) {
            return $column_obj;
        } 

        if ($column_obj instanceof \stdClass) {
            $column_obj = array_get((array)$column_obj, 'id');
        }
        
        if (is_array($column_obj)) {
            $column_obj = array_get($column_obj, 'id');
        }
        
        if (is_numeric($column_obj)) {
            return static::allRecords(function($record) use($column_obj){
                return $record->id == $column_obj;
            })->first();
        }
        // else,call $table_obj
        else {
            // get table Eloquent
            $table_obj = CustomTable::getEloquent($table_obj);
            // if not exists $table_obj, return null.
            if (!isset($table_obj)) {
                return null;
            }
            
            return static::allRecords(function($record) use($table_obj, $column_obj){
                return $record->column_name == $column_obj && $record->custom_table_id == $table_obj->id;
            })->first();
        }
        return null;
    }
    
    /**
     * Alter table column
     * For add table virtual column
     * @param bool $forceDropIndex drop index. calling when remove column.
     */
    public function alterColumn($forceDropIndex = false)
    {
        // Create index --------------------------------------------------
        $table = $this->custom_table;
        $column_name = $this->column_name;

        //DB table name
        $db_table_name = getDBTableName($table);
        $db_column_name = $this->getIndexColumnName(false);

        // Create table
        $table->createTable();

        // get whether index_enabled column
        $index_enabled = $this->indexEnabled();
        
        // check table column field exists.
        $exists = hasColumn($db_table_name, $db_column_name);

        $index_name = "index_$db_column_name";
        //  if index_enabled = false, and exists, then drop index
        // if column exists and (index_enabled = false or forceDropIndex)
        if ($exists && ($forceDropIndex || (!boolval($index_enabled)))) {
            DynamicDBHelper::dropIndexColumn($db_table_name, $db_column_name, $index_name);
        }
        // if index_enabled = true, not exists, then create index
        elseif ($index_enabled && !$exists) {
            DynamicDBHelper::alterIndexColumn($db_table_name, $db_column_name, $index_name, $column_name);
        }
    }
    
    /**
     * Get index column column name. This function uses only search-enabled column.
     * @param CustomColumn|array $obj
     * @param boolean $alterColumn if not exists column on db, execute alter column. if false, only get name
     * @return string
     */
    public function getIndexColumnName($alterColumn = true)
    {
        $name = 'column_'.array_get($this, 'suuid');
        $db_table_name = getDBTableName($this->custom_table);

        // if not exists, execute alter column
        if($alterColumn && !hasColumn($db_table_name, $name)){
            $this->alterColumn();
        }
        return $name;
    }

    /**
     * Whether this column has index
     * @return boolean
     */
    public function indexEnabled()
    {
        return boolval(array_get($this, 'options.index_enabled'));
    }

    /**
     * Create laravel-admin select box options. for column_type "select", "select_valtext"
     */
    public function createSelectOptions()
    {
        // get value
        $column_type = array_get($this, 'column_type');
        $column_options = array_get($this, 'options');

        // get select item string
        $array_get_key = $column_type == 'select' ? 'select_item' : 'select_item_valtext';
        $select_item = array_get($column_options, $array_get_key);
        $isValueText = ($column_type == 'select_valtext');
        
        $options = [];
        if (is_null($select_item)) {
            return $options;
        }

        if (is_string($select_item)) {
            $str = str_replace(array("\r\n","\r","\n"), "\n", $select_item);
            if (isset($str) && mb_strlen($str) > 0) {
                // loop for split new line
                $array = explode("\n", $str);
                foreach ($array as $a) {
                    $this->setSelectOptionItem($a, $options, $isValueText);
                }
            }
        } elseif (is_array($select_item)) {
            foreach ($select_item as $key => $value) {
                $this->setSelectOptionItem($value, $options, $isValueText);
            }
        }

        return $options;
    }
    
    /**
     * Create laravel-admin select box option item.
     */
    protected function setSelectOptionItem($item, &$options, $isValueText)
    {
        if (is_string($item)) {
            // $isValueText is true(split comma)
            if ($isValueText) {
                $splits = explode(',', $item);
                if (count($splits) > 1) {
                    $options[mbTrim($splits[0])] = mbTrim($splits[1]);
                } else {
                    $options[mbTrim($splits[0])] = mbTrim($splits[0]);
                }
            } else {
                $options[mbTrim($item)] = mbTrim($item);
            }
        }
    }

    /**
     * import template
     */
    public static function importTemplate($json, $options = []){
        $system_flg = array_get($options, 'system_flg', false);
        $custom_table = array_get($options, 'custom_table');

        $column_name = array_get($json, 'column_name');
        $obj_column = CustomColumn::firstOrNew([
            'custom_table_id' => $custom_table->id, 
            'column_name' => $column_name
        ]);
        $obj_column->column_name = $column_name;
        $obj_column->column_type = array_get($json, 'column_type');
        // system flg checks 1. whether import from system, 2. table setting sets 1
        $column_system_flg = array_get($json, 'system_flg');
        $obj_column->system_flg = ($system_flg && (is_null($column_system_flg) || $column_system_flg != 0));

        ///// set options
        collect(array_get($json, 'options', []))->each(function ($option, $key) use($obj_column) {
            $obj_column->setOption($key, $option, true);
        });

        // if options has select_target_table_name, get id
        if (array_key_value_exists('options.select_target_table_name', $json)) {
            if (is_nullorempty(array_get($json, 'options.select_target_table_name'))) {
                $obj_column->forgetOption('select_target_table');
            } else {
                $id = CustomTable::getEloquent(array_get($json, 'options.select_target_table_name'))->id ?? null;
                // not set id, continue
                if (!isset($id)) {
                    return;
                }
                $obj_column->setOption('select_target_table', $id);
            }
        }else{
            $obj_column->forgetOption('select_target_table');
        }
        $obj_column->forgetOption('select_target_table_name');

        // set characters
        if (array_key_value_exists('options.available_characters', $json)) {
            $available_characters = array_get($json, 'options.available_characters');
            // if string, convert to array
            if (is_string($available_characters)) {
                $obj_column->setOption('available_characters', explode(",", $available_characters));
            }
        }

        ///// set view name
        // if contains column view name in config
        if (array_key_value_exists('column_view_name', $json)) {
            $obj_column->column_view_name = array_get($json, 'column_view_name');
        }
        // not exists, get lang using app config
        else {
            $obj_column->column_view_name = exmtrans("custom_column.system_definitions.$column_name");
        }

        $obj_column->save();
        return $obj_column;
    }

    /**
     * import template (for setting other custom column id)
     */
    public static function importTemplateRelationColumn($json, $options = []){
        $custom_table = array_get($options, 'custom_table');
        $column_name = array_get($json, 'column_name');

        $obj_column = CustomColumn::firstOrNew([
            'custom_table_id' => $custom_table->id, 
            'column_name' => $column_name
        ]);
        
        ///// set options                        
        // check need update
        $update_flg = false;
        // if column type is calc, set dynamic val
        if (ColumnType::isCalc(array_get($json, 'column_type'))) {
            $calc_formula = array_get($json, 'options.calc_formula', []);
            if (is_null($calc_formula)) {
                $obj_column->forgetOption('calc_formula');
                $obj_column->save();
                return $obj_column;
            }
            // if $calc_formula is string, convert to json
            if (is_string($calc_formula)) {
                $calc_formula = json_decode($calc_formula, true);
            }
            if (is_array($calc_formula)) {
                foreach ($calc_formula as &$c) {
                    // if dynamic or select table
                    if (in_array(array_get($c, 'type'), [CalcFormulaType::DYNAMIC, CalcFormulaType::SELECT_TABLE])) {
                        $c['val'] = static::getEloquent($c['val'], $custom_table)->id ?? null;
                    }
                    
                    // if select_table
                    if (array_get($c, 'type') == CalcFormulaType::SELECT_TABLE) {
                        // get select table
                        $select_table_id = CustomColumn::getEloquent($c['val'])->getOption('select_target_table') ?? null;
                        // get select from column
                        $from_column = CustomColumn::getEloquent(array_get($c, 'from'), $select_table_id);
                        $c['from'] = $from_column->id ?? null;
                    }
                }
            }
            // set as json string
            $obj_column->setOption('calc_formula', $calc_formula);
            $update_flg = true;
        }

        if ($update_flg) {
            $obj_column->save();
        }
        return $obj_column;
    }

    public function getOption($key, $default = null)
    {
        return $this->getJson('options', $key, $default);
    }
    public function setOption($key, $val = null, $forgetIfNull = false)
    {
        return $this->setJson('options', $key, $val, $forgetIfNull);
    }
    public function forgetOption($key)
    {
        return $this->forgetJson('options', $key);
    }
    public function clearOption()
    {
        return $this->clearJson('options');
    }
    
    public function deletingChildren()
    {
        $this->custom_form_columns()->delete();
        $this->custom_view_columns()->delete();
    }

    protected static function boot()
    {
        parent::boot();
        
        // delete event
        static::deleting(function ($model) {
            // Delete items
            $model->deletingChildren();

            // execute alter column
            $model->alterColumn(true);
        });
    }
}
