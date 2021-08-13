<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Renter;
use App\Models\Utility;

class UtilityController extends Controller
{
    public function utlity(){



        $data=User::where('id','=',session('LoggedUser'))-> first();
        
        $bills=DB::table('bills')
        ->join('renter_flats','bills.renter_flat_id','renter_flats.id')
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('bills.id','bills.month','bills.year','houses.holding_no','houses.name','flats.flat_no')
        ->get();
       // return $bills;

       $utilities=DB::table('utilities')
       ->select('utilities.bill_id')
       ->get();

       $houses=DB::table('houses')
       ->join('users','houses.owner_username','users.username')
        ->where('users.username',$data->username)
        ->select('houses.id','houses.name','houses.holding_no','houses.dlt')
       ->get();
      //return $houses;

      // return $utilities;
        return view('owner.utility',compact('bills','utilities','houses'));
    }

    public function add(Request $request){
        $request->validate([
            'bill_id'=> ['required'],
            'gas'=> ['required','integer'],
            'electricity'=> ['required','integer'],
            'water'=> ['required','integer'],
            'serviceCharge'=> ['required','integer'],
            'others'=> ['required','integer'],


            
        ]);


        $utlity= new Utility();

        $utlity->bill_id=$request->bill_id;
        $utlity->month=date('m');
        $utlity->year=date('Y');
        $utlity->date=date('Y-m-d');
        $utlity->gas=$request->gas;
        $utlity->electricity=$request->electricity;
        $utlity->water=$request->water;
        $utlity->serviceCharge=$request->serviceCharge;
        $utlity->others=$request->others;

        $save=$utlity->save();

        if($save){
            return back()->with('successCreateOne' , 'Utility add Successfully'); 
        }else{   
            return back()->with('faillCreateOne' , 'Utility add Fail');
        }
    }

}