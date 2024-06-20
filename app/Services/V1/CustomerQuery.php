<?php

namespace App\Services\V1;

class CustomerQuery extends Query
{
    protected $allowedFields = [
        'name' => ['eq'],
        'email' => ['eq'],
        'phone' => ['eq'],
        'id' => ['eq'],
    ];
}