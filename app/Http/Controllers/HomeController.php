<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('users.index');
    }
    public function contact(){
        return view('users.contact');
     }

     public function login(){
      return view('users.login');
   }

}
