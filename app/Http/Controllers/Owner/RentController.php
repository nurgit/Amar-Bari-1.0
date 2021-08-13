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

        $bills=DB::table('bills')//for Rents
        ->join('renter_flats','bills.renter_flat_id','renter_flats.id')
        ->join('utilities','bills.id','utilities.bill_id')
         ->join('renters','renter_flats.renter_username','renters.username')//for Renters 
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
        ->where('users.username',$data->username)
        ->select('bills.id','bills.renter_flat_id','bills.month','bills.year','bills.month_rent','bills.status', 
        'utilities.gas','utilities.electricity','utilities.water','utilities.serviceCharge','utilities.others' ,'flats.flat_no','houses.name')
        ->get();
       // return $bills;

        $rents=DB::table('rents')//for Rents
        ->join('renter_flats','rents.renter_flat_id','renter_flats.id')
         ->join('renters','renter_flats.renter_username','renters.username')//for Renters 
        ->join('flats','renter_flats.flat_id','flats.id')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
        ->where('users.username',$data->username)
        ->select( 'rents.id','rents.month','rents.year','rents.month_rent','rents.status', 
        'rents.gas','rents.electricity','rents.water','rents.serviceCharge','rents.others' ,'renters.name','flats.flat_no')
        ->get();
        //return $rents;

        $houses=DB::table('houses')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('houses.id','houses.name','houses.holding_no','houses.dlt')
        ->get();
        //return $houses;
        return view('owner.rent', compact('bills','houses','rents'));
        //return view('owner.rent',$data);
    }

    public function update( Request $request, $id){
      //return $request;
      
    //   $request->validate([
    //       'amount'=>['required']
    //   ]);
   
      $rent=Rent::find($id);
      if( !is_null($request->month_rent)){
        
        $rent->month_rent=$request->month_rent;
      }
     // !is_null()
      if( !is_null($request->serviceCharge) ){
        $rent->serviceCharge=$request->serviceCharge;
      }

      if(!is_null($request->electricity)){
        $rent->electricity=$request->electricity;
      }

      if(!is_null($request->gas)){
        $rent->gas=$request->gas;
      }

      if(!is_null($request->water)){
        $rent->water=$request->water;
      }
      if(!is_null($request->others)){
        $rent->others=$request->others;
      }

      $save=$rent->save();
      if( $save){
             
        return back()->with('successCreateOne' , ' Rent  has been Update successfully');
        
    }else{
        //return back()->with('success' , 'new user has been added successfully');
        
        return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
    }

      
    }

    public function add(){

        
        
    }

}
