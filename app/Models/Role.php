<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id',
        'role_name',
        'status',
        'dlt',
    ];
    //relation with user 
    public function user()
    {
        return $this ->hasMany('App\user');
    }
}
