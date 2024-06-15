<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function fixjobs()
    {
        return $this->hasMany(Fixjob::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}