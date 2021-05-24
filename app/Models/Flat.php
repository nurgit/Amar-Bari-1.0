<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;


    protected $fillable = [
        'flat_no',
        'house_id',
        'size',
        'details',
        'rent',
        'status',
        'dlt',
       
        
    ];
}
