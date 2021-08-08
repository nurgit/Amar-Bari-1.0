<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $fillable = [
        'renter_flat_id',
        'month',
        'year',
        'date',
        'gas',
        'electricity',
        'water',
        'serviceCharge',
        'others',
        'status',
        'dlt',     
    ];
}
