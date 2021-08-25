<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class ManagerHouseController extends Controller
{
    public function building(){
        $data=User::where('id','=',session('LoggedUser'))-> first();
        $houses =DB::table('houses')
         ->join('owners', 'houses.owner_username', 'owners.username')
         ->join('managers','owners.username','managers.owner_username')
        ->where('managers.email',$data->email)
        ->get();

       // return $houses;
    // $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
    return view('manager.building',compact('houses'));
}
}
