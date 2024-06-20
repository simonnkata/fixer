<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixjob extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'description',
        'customer_id',
        'artisan_id',
        'address_id',
        'status',
        'price'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
}