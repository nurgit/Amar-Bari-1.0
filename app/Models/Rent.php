<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'date',
        'renter_flat_id',
        'amount',
        'status',
        'dlt',
        
    ];
}
