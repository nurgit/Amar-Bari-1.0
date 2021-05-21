<?php

namespace App\Http\Controllers\Renter;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    //
    public function index(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('renter.index', $data);
    }
}
