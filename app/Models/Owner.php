<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;


    protected $fillable = [
        'username',
        'email',
        'occupation',
        'home',
        'district',
        'city',
        'address',
        'status',
        'dlt',
        
    ];
}