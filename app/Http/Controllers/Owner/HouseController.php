<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\User;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
        //building
        public function building(){
            $data=User::where('id','=',session('LoggedUser'))-> first();
            $username=$data->username;
        $houses=House::where('owner_username','=',$username)-> get();
        
           // return $houses;
        // $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.building',compact('houses'));
    }
    public function addBuilding(Request $request ){


    $request->validate([
        'name'=> ['required','string'],
        'holding_no'=> ['required','string'],
        'road_no'=> ['required', 'string'],
        'city'=> ['required', 'string'],
        'district'=> ['required', 'string'],
        
    ]);

    //return $request->input();
    $owner=User::where('id','=',session('LoggedUser'))-> first();
    $username=$owner->username;
    $house = new House();

    $house->name=$request->name;
    $house->holding_no=$request->holding_no;
    $house->road_no=$request->road_no;
    $house->city=$request->city;
    $house->district=$request->district;
    $house->owner_username=$username;
    

    $save=$house->save();
    if( $save){
        
            return back()->with('successCreateOne' , 'new Manager has been added successfully');
            
        }else{
            //return back()->with('success' , 'new user has been added successfully');
            
            return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
        }

    }
            // For House delete

    public function destroy(house $house,$id)
        {
            $house=House::find($id);
          
            $house->dlt=0;
            $save=$house->save();

            if( $save){
                return back()->with('successCreateOne' , 'Building Information Update Successfully'); 
            }else{   
                return back()->with('faillCreateOne' , 'Building Information Update Fail');
            }
        }

        public function update(Request $request, house $house,$id)
        {
            $request->validate([
                'name'=> ['required','string'],
                'holding_no'=> ['required','string'],
                'road_no'=> ['required', 'string'],
                'city'=> ['required', 'string'],
                'district'=> ['required', 'string'],
                
            ]);
            $owner=User::where('id','=',session('LoggedUser'))-> first();
            $username=$owner->username;
            $house=House::find($id);

            $house->name=$request->name;
            $house->holding_no=$request->holding_no;
            $house->road_no=$request->road_no;
            $house->city=$request->city;
            $house->district=$request->district;
            $house->owner_username=$username;

            $save=$house->save();
            if( $save){
                    return back()->with('successCreateOne' , 'Building Information Update Successfully'); 
                }else{   
                    return back()->with('faillCreateOne' , 'Building Information Update Fail');
                }

        }

        //-----
    
        // $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        // return view('owner.building',$data);

    //}

}
