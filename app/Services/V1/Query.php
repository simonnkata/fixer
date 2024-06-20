<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

abstract class Query
{
    protected $allowedFields = [];
    protected $columnMap = [];
    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'like' => 'like',
        'in' => 'in',
        'nin' => 'not in'
    ];

    public function transform(Request $request)
    {
        $queryItems = [];

        foreach ($this->allowedFields as $field => $operators) {
            $query = $request->query($field);

            if (is_null($query)) {
                continue;
            }

            $column = $this->columnMap[$field] ?? $field;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    if (in_array($operator, ['in', 'nin'])) {
                        $values = explode(',', $query[$operator]);
                        $queryItems[] = [$column, $this->operatorMap[$operator], $values];
                    } else {
                        $queryItems[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                    }
                }
            }
        }

        return $queryItems;
    }
}