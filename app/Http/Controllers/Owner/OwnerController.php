<?php

namespace App\Http\Controllers\Owner;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\House;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //dashboard
    public function index(){
        //$data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        $data=User::where('id','=',session('LoggedUser'))-> first();
        $username=$data->username;
         $houses=House::where('owner_username','=',$username)-> get();
    
       // return $houses;
    // $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.dashboard',compact('houses'));
     
    }
}
