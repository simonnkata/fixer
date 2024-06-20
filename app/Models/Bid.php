<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'timeframe',
        'amount',
        'status',
        'fixjob_id',
        'artisan_id',
    ];

    public function fixjob()
    {
        return $this->belongsTo(Fixjob::class);
    }

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}