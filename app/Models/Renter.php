<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;


    protected $fillable = [
        'username',
        'name',
        'email',
        'phone',
        'NID',
        'Permanent_address',
        'status',
        'dlt',
        
    ];
}
