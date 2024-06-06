<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function artisan(){
        return $this->belongsTo(Artisan::class);
    }

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
