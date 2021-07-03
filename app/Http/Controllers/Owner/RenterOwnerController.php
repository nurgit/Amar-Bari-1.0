<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RenterOwnerController extends Controller
{
    public function renter(){
      
        $data=User::where('id','=',session('LoggedUser'))-> first();
        
        $renters=DB::table('renters')
        ->join('renter_flats','renters.username','renter_flats.renter_username')
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('houses.holding_no','flats.flat_no','renters.name','renters.phone')
        ->get();
        return $renters;
        return view('owner.renter');
    }
}
