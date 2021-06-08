<?php

namespace App\Http\Controllers\Owner;

use App\Models\Rent;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\House;
use Illuminate\Http\Request;

class RentController extends Controller
{
      //rent
      public function rent(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.rent',$data);
    }
}
