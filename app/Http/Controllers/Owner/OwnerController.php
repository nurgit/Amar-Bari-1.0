<?php

namespace App\Http\Controllers\Owner;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\House;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //dashboard
    public function index(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.dashboard',$data);
     
    }
// Accout 
    public function account(){
      // $ms=Manager::with('managers')->get();
        $managers=Manager::where('owner_username','=',session('LoggedUser'))-> get();
           //return $managers;
        // $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
       return view('owner.account',compact('managers'));
    }
    public function addManager(Request $request ){

          //  return $request->input();
    $owner=User::where('id','=',session('LoggedUser'))-> first();
    $ownerId=$owner->id;
      $request->validate([
        'username'=> ['required','unique:managers'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:managers'],
        'occupation' => ['required', 'string'],
        'home' => ['required', 'string','unique:managers'],
        'district' => ['required', 'string'],
        'city' => ['required', 'string'],
        'address' => ['required', 'string'],
    ]);
    $manager = new Manager();
    $manager->username=$request->username;
    $manager->email=$request->email;
    $manager->occupation=$request->occupation;
    $manager->home=$request->home;
    $manager->district=$request->district;
    $manager->city=$request->city;
    $manager->address=$request->address;
    $manager->owner_username=$ownerId;
  
    $save=$manager->save();
     if( $save){
          
            return back()->with('successCreateOne' , 'new Manager has been added successfully');
            
        }else{
            //return back()->with('success' , 'new user has been added successfully');
            
            return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
        }

    }

    //building
    public function building(){
           $data=User::where('id','=',session('LoggedUser'))-> first();
           $username=$data->username;
        $houses=House::where('owner_username','=',$username)-> get();
        
           //return $houses;
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

    public function destroy(house $house)
        {
                //
        }

        //-----
     
        // $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        // return view('owner.building',$data);

    //}
    //flats
    public function flat(){

        //--
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.flat',$data);
    }
    //rent
    public function rent(){
        $data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
        return view('owner.rent',$data);
    }
}
