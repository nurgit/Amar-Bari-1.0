<?php

namespace App\Http\Controllers\Owner;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //dashboard
    public function index(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.dashboard',$data);
    }

    public function account(){
      //  $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.account');
    }
}
