<?php

namespace App\Http\Controllers\Owner;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //
    public function index(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.index',$data);
    }
}
