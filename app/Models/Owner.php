<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Owner extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'occupation',
        'home',
        'district',
        'city',
        'address',
        'status',
        'dlt',
        
    ];
}
