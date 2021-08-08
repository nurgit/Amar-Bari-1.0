<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'renter_flat_id',
        'month',
        'year',
        'date',
        'month_rent',
        'status',
        'dlt',     
    ];
}
