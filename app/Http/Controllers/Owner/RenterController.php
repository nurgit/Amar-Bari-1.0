<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    public function renter(){
        return view('owner.renter');
    }
}
