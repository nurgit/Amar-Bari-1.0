<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Renter; 

class UtilityController extends Controller
{
    public function utlity(){

        $data=User::where('id','=',session('LoggedUser'))-> first();
        
        $renters=DB::table('renters')
        ->join('renter_flats','renters.username','renter_flats.renter_username')
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('houses.holding_no','houses.name','flats.flat_no','flats.house_id','renters.id','renters.name','renters.username','renters.email','renters.phone','renters.NID','renters.Permanent_address','renters.dlt','renter_flats.start_date','renter_flats.leave_date','renter_flats.flat_id')
        ->get();

        return view('owner.utility');
    }
}
