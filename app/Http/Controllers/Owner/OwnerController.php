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
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.account',$data);
    }

    //building
    public function building(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.building',$data);
    }
    //flats
    public function flat(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.flat',$data);
    }
    //rent
    public function rent(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.rent',$data);
    }
}
