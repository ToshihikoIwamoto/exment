<?php

namespace Exceedone\Exment\Database\Schema;

use Illuminate\Database\Schema\Blueprint;

trait BuilderTrait
{
    /**
     * insert and delete rows
     *
     * @return void
     */
    public function insertDelete($table, $values, $settings = [])
    {
        $settings = array_merge(
            [
                'dbValueFilter' => null,
                'dbDeleteFilter' => null,
                'matchFilter' => null,
            ],
            $settings
        );
        extract($settings);
        
        // get DB values
        $dbValueQuery = \DB::table($table);

        if ($dbValueFilter) {
            $dbValueFilter($dbValueQuery);
        }

        $dbValues = $dbValueQuery->get();

        $inserts = [];
        foreach ($values as $value) {
            if (!isset($value)) {
                continue;
            }
            /// not exists db value, insert
            if (!$dbValues->first(function ($dbValue, $k) use ($value, $matchFilter) {
                return $matchFilter($dbValue, $value);
            })) {
                $inserts[] = $value;
                \DB::table($table)->insert($value);
            }
        }

        ///// Delete if not exists value
        foreach ($dbValues as $dbValue) {
            if (!collect($values)->first(function ($value, $k) use ($dbValue, $matchFilter) {
                return $matchFilter($dbValue, $value);
            })) {
                $dbDeleteQuery = \DB::table($table);
                if ($dbDeleteFilter) {
                    $dbDeleteFilter($dbDeleteQuery, $dbValue);
                }
                $dbDeleteQuery->delete();
            }
        }

        return $inserts;
    }

    /**
     * Get database version.
     *
     * @return void
     */
    public function getVersion()
    {
        $results = $this->connection->selectFromWriteConnection($this->grammar->compileGetVersion());

        return $this->connection->getPostProcessor()->processGetVersion($results);
    }

    /**
     * Check mariadb
     *
     * @return void
     */
    public function isMariaDB()
    {
        $results = $this->connection->selectFromWriteConnection($this->grammar->compileGetVersion());

        return $this->connection->getPostProcessor()->processIsMariaDB($results);
    }

    public function hasIndex($tableName, $columnName, $indexName)
    {
        $indexes = $this->getIndexDefinitions($tableName, $columnName);

        if (is_null($indexes)) {
            return false;
        }

        return collect($indexes)->first(function ($index) use ($indexName) {
            return array_get($index, 'key_name') == $indexName;
        }) != null;
    }

    /**
     * Get the table listing
     *
     * @return array
     */
    public function getTableListing()
    {
        $results = $this->connection->selectFromWriteConnection($this->grammar->compileGetTableListing());

        return $this->connection->getPostProcessor()->processTableListing($results);
    }

    /**
     * Get column difinitions
     *
     * @return array
     */
    public function getColumnDefinitions($table)
    {
        $baseTable = $table;
        $table = $this->connection->getTablePrefix().$table;
        $results = $this->connection->selectFromWriteConnection($this->grammar->compileColumnDefinitions($table));

        return $this->connection->getPostProcessor()->processColumnDefinitions($baseTable, $results);
    }

    /**
     * get index key list
     *
     * @param string $tableName
     * @param string $columnName
     * @return array index key list
     */
    public function getIndexDefinitions($tableName, $columnName)
    {
        return $this->getUniqueIndexDefinitions($tableName, $columnName, false);
    }

    /**
     * get unique key list
     *
     * @param string $tableName
     * @param string $columnName
     * @return array unique key list
     */
    public function getUniqueDefinitions($tableName, $columnName)
    {
        return $this->getUniqueIndexDefinitions($tableName, $columnName, true);
    }

    /**
     * get database unique or index list
     *
     * @param string $tableName
     * @param string $columnName
     * @param bool $unique
     * @return array
     */
    protected function getUniqueIndexDefinitions($tableName, $columnName, $unique)
    {
        if (!\Schema::hasTable($tableName)) {
            return collect([]);
        }

        $baseTableName = $tableName;
        $tableName = $this->connection->getTablePrefix().$tableName;

        $sql = $unique ? $this->grammar->compileGetUnique($tableName) : $this->grammar->compileGetIndex($tableName);

        $results = $this->connection->select($sql, [$columnName]);

        return $this->connection->getPostProcessor()->processIndexDefinitions($baseTableName, $results);
    }
    
    /**
     * Create Value Table if it not exists.
     *
     * @param  string  $table
     * @return void
     */
    public function createValueTable($table)
    {
        $table = $this->connection->getTablePrefix().$table;
        $this->connection->statement(
            $this->grammar->compileCreateValueTable($table)
        );
    }

    /**
     * Create Relation Value Table if it not exists.
     *
     * @param  string  $table
     * @return void
     */
    public function createRelationValueTable($table)
    {
        $table = $this->connection->getTablePrefix().$table;
        $this->connection->statement(
            $this->grammar->compileCreateRelationValueTable($table)
        );
    }

    /**
     *  Add Virtual Column and Index
     *
     * @param string $db_table_name
     * @param string $db_column_name
     * @param string $index_name
     * @param string $json_column_name
     * @return void
     */
    public function alterIndexColumn($db_table_name, $db_column_name, $index_name, $json_column_name)
    {
        if (!\Schema::hasTable($db_table_name)) {
            return;
        }

        $db_table_name = $this->connection->getTablePrefix().$db_table_name;

        $sqls = $this->grammar->compileAlterIndexColumn($db_table_name, $db_column_name, $index_name, $json_column_name);

        foreach ($sqls as $sql) {
            $this->connection->statement($sql);
        }
    }

    /**
     *  Drop Virtual Column and Index
     *
     * @param string $db_table_name
     * @param string $db_column_name
     * @param string $index_name
     * @return void
     */
    public function dropIndexColumn($db_table_name, $db_column_name, $index_name)
    {
        if (!\Schema::hasTable($db_table_name)) {
            return;
        }

        $db_table_name = $this->connection->getTablePrefix().$db_table_name;

        // check index name
        if (\Schema::hasIndex($db_table_name, $db_column_name, $index_name)) {
            \Schema::table($db_table_name, function (Blueprint $table) use ($index_name) {
                $table->dropIndex($index_name);
            });
        }

        // check column name
        if (\Schema::hasColumn($db_table_name, $db_column_name)) {
            \Schema::table($db_table_name, function (Blueprint $table) use ($db_column_name) {
                $table->dropColumn($db_column_name);
            });
        }
    }
}
