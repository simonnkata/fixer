<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function artisan(){
        return $this->belongsTo(Artisan::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function bid(){
        return $this->hasMany(Address::class);
    }
}
