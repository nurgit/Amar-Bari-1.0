<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Renter;
use App\Models\Renter_flat;

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
         ->select('houses.holding_no','houses.name','flats.flat_no','flats.house_id','renters.id','renters.name','renters.username','renters.email','renters.phone','renters.NID','renters.Permanent_address','renters.dlt','renter_flats.start_date','renter_flats.leave_date','renter_flats.flat_id')
        ->get();
        //return $renters;

        $houses=DB::table('houses')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('houses.id','houses.name','houses.holding_no','houses.dlt')
        ->get();
        //return $houses;
        $flats=DB::table('flats')
        ->join('houses','flats.house_id','houses.id')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('flats.id','flats.flat_no','flats.house_id')
         ->get();
        return view('owner.renter', compact('renters','houses','flats'));
    }

    public function addRenter(Request $request ){

       // return $request;

        $request->validate([
            'username'=> ['required','string',],
            'name'=> ['required','string'],
            'email'=> ['required'],
            'phone'=> ['required','string'],
            'NID'=> ['required','string'],
            'Permanent_address'=>['required','string'],

            'flat_id'=> ['required'],
            'start_date'=> ['string','nullable'],
            'leave_date'=> ['string','nullable'],

            
        ]);
    
        //return $request->input();
        $renter = new Renter();
    
        $renter->username=$request->username;
        $renter->name=$request->name;
        $renter->email=$request->email;
        $renter->phone=$request->phone;
        $renter->NID=$request->NID;
        $renter->Permanent_address=$request->Permanent_address;
        $renter_save=$renter->save();


        $renter_flat= new Renter_flat(); 
        $renter_flat->flat_id=$request->flat_id;
        $renter_flat->renter_username=$request->username;
        $renter_flat->start_date=$request->start_date;
        $renter_flat->leave_date=$request->leave_date;
        $renter_flat_save=$renter_flat->save();

        //return $request;
        if( $renter_save && $renter_flat_save){
            
                return back()->with('successCreateOne' , 'new Renter has been added successfully');
                
            }else{
                //return back()->with('success' , 'new user has been added successfully');
                
                return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
            }
    
    }



    public function update(Request $request,$id ){

        // return $request;
 
         $request->validate([
             'username'=> ['required','string',],
             'name'=> ['required','string'],
             'email'=> ['required'],
             'phone'=> ['required','string'],
             'NID'=> ['required','string'],
             'Permanent_address'=>['required','string'],
 
             'flat_id'=> ['required'],
             'start_date'=> ['string','nullable'],
             'leave_date'=> ['string','nullable'],
 
             
         ]);
     
         //return $request->input();
         $renter =Renter::find($id);
         $renter->username=$request->username;
         $renter->name=$request->name;
         $renter->email=$request->email;
         $renter->phone=$request->phone;
         $renter->NID=$request->NID;
         $renter->Permanent_address=$request->Permanent_address;
        $renter_save=$renter->save();
 
         $renter_flat=Renter_flat::find($id); 
         $renter_flat->flat_id=$request->flat_id;
         $renter_flat->renter_username=$request->username;
         $renter_flat->start_date=$request->start_date;
         $renter_flat->leave_date=$request->leave_date;
         $renter_flat_save=$renter_flat->save();
         $renter_save=$renter->save();
        // return $renter_flat;
         if( $renter_save && $renter_flat_save){
             
                 return back()->with('successCreateOne' , ' Renter has been Update successfully');
                 
             }else{
                 //return back()->with('success' , 'new user has been added successfully');
                 
                 return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
             }
     
     }


     public function destroy(renter $renter,$id)
     {
         $renter=Renter::find($id);
         $renter->dlt=0;
         $save_renter=$renter->save();

         $renter_flat=Renter_flat::find($id);
         $renter_flat->dlt=0;
         $save_renter_flat=$renter_flat->save();

         if( $save_renter && $save_renter_flat ){
             return back()->with('successCreateOne' , 'Renter Information Deleted Successfully'); 
         }else{   
             return back()->with('faillCreateOne' , 'Renter Information Deleted Fail');
         }
     }
}
