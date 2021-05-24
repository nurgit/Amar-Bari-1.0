<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'holding_no',
        'road_no',
        'city',
        'district',
        'status',
        'dlt',
       // 'owner_username',
        
    ];
}
