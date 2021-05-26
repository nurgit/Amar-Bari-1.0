<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter_flat extends Model
{
    use HasFactory;

    protected $fillable = [
        'flat_id',
        'renter_username',
        'start_date',
        'leave_date',
        'status',
        'dlt',
        
    ];

}
