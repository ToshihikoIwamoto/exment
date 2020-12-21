<?php
namespace Exceedone\Exment\Services\ViewFilter;

abstract class NotNullBase extends ViewFilterBase
{
    protected function _setFilter($query, $method_name, $query_column, $query_value)
    {
        if ($this->column_item->isMultipleEnabled()) {
            $query->{$method_name}(function ($query) use ($query_column) {
                $query->whereNotNull($query_column);
                $query->where($query_column, '<>', '[]');
            });
        } else {
            $query->{$method_name. 'NotNull'}($query_column);
        }
    }
}
