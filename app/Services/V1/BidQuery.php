<?php

namespace App\Services\V1;

class BidQuery extends Query
{
    protected $allowedFields = [
        'timeframe' => ['eq', 'gt', 'lt'],
        'amount' => ['eq', 'gt', 'lt'],
        'status' => ['in'],
        'fixjob_id' => ['eq'],
        'artisan_id' => ['eq'],
    ];
}