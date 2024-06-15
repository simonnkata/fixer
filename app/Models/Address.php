<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function artisan()
    {
        return $this->hasMany(Artisan::class);
    }

    public function fixjob()
    {
        return $this->hasMany(Fixjob::class);
    }

    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}