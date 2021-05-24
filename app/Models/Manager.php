<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
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
        'owner_username',
        
    ];
}
