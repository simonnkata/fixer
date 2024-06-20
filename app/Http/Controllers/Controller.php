<?php

namespace App\Http\Controllers;

use App\Services\V1\Query;

abstract class Controller
{
    public function buildQuery($request, $model, $filter, $query): mixed
    {
        $queryItems = $filter->transform($request); // [['column', 'operator', 'value'], ['column', 'operator', 'value'],....]
        $query = $model::query();
        if (count($queryItems) != null) {
            foreach ($queryItems as $item) {
                if ($item[1] === 'in') {
                    $query->whereIn($item[0], $item[2]);
                } elseif ($item[1] === 'not in') {
                    $query->whereNotIn($item[0], $item[2]);
                } else {
                    $query->where($item[0], $item[1], $item[2]);
                }
            }
        }
        return $query;
    }
}