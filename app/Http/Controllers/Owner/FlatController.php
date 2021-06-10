<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\User;
use App\Models\House;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class FlatController extends Controller
{


    public function flat(){
        $data=User::where('id','=',session('LoggedUser'))-> first();
        $flats=DB::table('renter_flats')
       ->join('rents','renter_flats.id','rents.renter_flat_id')
        ->join('renters','renter_flats.renter_username','renters.username')
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select( 'renters.username','renters.phone', 'flats.flat_no','flats.size','rents.amount')
        ->get();
        return $flats;
        //return view('owner.flat',compact('flats'));
       
    }


}
