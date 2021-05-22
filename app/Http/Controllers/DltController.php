<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DltController extends Controller
{
    public function index(){
        return view('auth.dlt');
    }
}
