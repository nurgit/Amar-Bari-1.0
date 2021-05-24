<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
       return view('home.index');
    }
    public function contact(){
        return view('home.contact');
     }
}
