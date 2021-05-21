<?php

namespace App\Http\Controllers\Manager;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('manager.index', $data);
    }
}
