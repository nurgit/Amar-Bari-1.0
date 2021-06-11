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
        $flats=DB::table('flats')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('flats.flat_no','flats.size','flats.rent','houses.name','houses.holding_no')
        ->get();
       // return $flats;
        return view('owner.flat',compact('flats'));
       
    }


}
