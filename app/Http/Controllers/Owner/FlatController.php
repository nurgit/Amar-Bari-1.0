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
         ->select('flats.id','flats.flat_no','flats.house_id','flats.details','flats.size','flats.rent','flats.dlt','houses.name','houses.holding_no')
        ->get();

        $houses=DB::table('houses')
        ->join('users','houses.owner_username','users.username')
         ->where('users.username',$data->username)
         ->select('houses.id','houses.name','houses.holding_no','houses.dlt')
        ->get();
       //return $houses;
        return view('owner.flat',compact('flats','houses'));
       
    }


    // Add flat -------------------------

    public function addFlat(Request $request ){


        $request->validate([
            'flat_no'=> ['required','string'],
            'house_id'=> ['required','integer'],
            'size'=> ['required','integer' ],
            'details'=> ['required', 'string'],
            'rent'=> ['required', 'string'],
            
        ]);
    
        //return $request->input();
        $flat = new Flat();
    
        $flat->flat_no=$request->flat_no;
        $flat->house_id=$request->house_id;
        $flat->size=$request->size;
        $flat->details=$request->details;
        $flat->rent=$request->rent;
        
    
        $save=$flat->save();
        if( $save){
            
                return back()->with('successCreateOne' , 'new Flat has been added successfully');
                
            }else{
                //return back()->with('success' , 'new user has been added successfully');
                
                return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
            }
    
        }

        public function update(Request $request, flat $flat,$id)
        {
            $request->validate([
                'flat_no'=> ['required','string'],
                'house_id'=> ['required','integer'],
                'size'=> ['required','integer' ],
                'details'=> ['required', 'string'],
                'rent'=> ['required', 'string'],
                
            ]);

            // $owner=User::where('id','=',session('LoggedUser'))-> first();
            // $username=$owner->username;
            $flat=Flat::find($id);
            $flat->flat_no=$request->flat_no;
            $flat->house_id=$request->house_id;
            $flat->size=$request->size;
            $flat->details=$request->details;
            $flat->rent=$request->rent;
        

            $save=$flat->save();
            if( $save){
                    return back()->with('successCreateOne' , 'Flat Information Update Successfully'); 
                }else{   
                    return back()->with('faillCreateOne' , 'Flat Information Update Fail');
                }

         }

    

         public function destroy(house $house,$id)
         {
             $flat=Flat::find($id);
           
             $flat->dlt=0;
             $save=$flat->save();
 
             if( $save){
                 return back()->with('successCreateOne' , 'Flat Information Deleted Successfully'); 
             }else{   
                 return back()->with('faillCreateOne' , 'Flat Information Deleted Fail');
             }
         }

}
