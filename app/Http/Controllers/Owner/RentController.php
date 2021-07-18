<?php

namespace App\Http\Controllers\Owner;

use App\Models\Rent;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RentController extends Controller
{
      //rent
      public function rent(){
        //$data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        $data=User::where('id','=',session('LoggedUser'))-> first();
        $rents=DB::table('rents')//for Rents
        ->join('renter_flats','rents.renter_flat_id','renter_flats.id')
        ->join('renters','renter_flats.renter_username','renters.username')//for Renters 
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
        ->where('users.username',$data->username)
        ->select('rents.id','rents.date','rents.amount','rents.dlt','renters.name','renters.phone','flats.flat_no','houses.name')
        ->get();
        
        return $rents;
        $houses=DB::table('houses')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('houses.id','houses.name','houses.holding_no','houses.dlt')
        ->get();
        //return $houses;
        return view('owner.rent', compact('rents','houses'));
        //return view('owner.rent',$data);
    }
}
