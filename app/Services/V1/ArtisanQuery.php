<?php

namespace App\Services\V1;

class ArtisanQuery extends Query
{
    protected $allowedFields = [
        'name' => ['eq'],
        'email' => ['eq'],
        'phone' => ['eq'],
        'verificationStatus' => ['in'],
        'rating' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'verificationStatus' => 'verification_status',
    ];
}