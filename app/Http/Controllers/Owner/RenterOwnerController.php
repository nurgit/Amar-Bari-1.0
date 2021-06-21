<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenterOwnerController extends Controller
{
    public function renter(){
        return view('owner.renter');
    }
}
