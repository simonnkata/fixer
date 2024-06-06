<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function jobs(){
        return $this->hasMany(Job::class);
    }
    
    public function address(){
        return $this->hasMany(Address::class);
    }
}
