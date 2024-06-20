<?php

namespace App\Services\V1;

class FixjobQuery extends Query
{
    protected $allowedFields = [
        'category' => ['in'],
        'customer_id' => ['eq'],
        'artisan_id' => ['eq'],
        'status' => ['in'],
        'price' => ['eq', 'gt', 'lt'],
    ];
}