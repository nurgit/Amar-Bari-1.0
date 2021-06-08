<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\User;
use App\Models\House;
use App\Models\Manager;

use Illuminate\Http\Request;
class AccountController extends Controller
{
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
}
