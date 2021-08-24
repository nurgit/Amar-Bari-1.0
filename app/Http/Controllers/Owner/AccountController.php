<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use App\Models\User;
use App\Models\House;
use App\Models\Manager;
use App\Models\Owner;
use Illuminate\Http\Request;
use PharIo\Manifest\Manifest;
use Illuminate\Support\Facades\Hash;
class AccountController extends Controller
{
    // Accout 
    public function account(){
        // $ms=Manager::with('managers')->get();
          $managers=Manager::where('owner_username','=',session('LoggedUser'))-> get();
          //owners=Owner::where('owner_username','=',session('LoggedUser'))-> get();
             //return $managers;
           $owners=Owner::where('id','=',session('LoggedUser'))->get();
          // return $owners;
         return view('owner.account',compact('managers','owners'));
    }

    // Edit Owner 
    public function editOwner(Request $request,manager $manager,$id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
         //   'username'=> ['required','unique:users'],
            'email' => ['required', 'string', 'email', ],
            'phone' => ['required', 'string', 'min:11', ],
            'occupation' => ['required'],
            'home' => ['required'],
            'district' => ['required' ],
            'city' => ['required'],
            'address' => ['required'],

        ]);
        
       
        $user=User::find($id);
        $user->name=$request->name;
       // $user->username=$request->username;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $save=$user->save();
        
        $owner =Owner::find($id);
        $owner->name=$request->name;
       // $owner->username=$request->username;
        $owner->email=$request->email;
        $owner->phone=$request->phone;
        $owner->occupation=$request->occupation;
        $owner->home=$request->home;
        $owner->district=$request->district;
        $owner->city=$request->city;
        $owner->address=$request->address;
        $save1=$owner->save();


         if( $save  && $save1){
          
            return back()->with('success', 'Your Accout Update successfully  ');
            
         }else{
        //     //return back()->with('success' , 'new user has been added successfully');
            
            return back()->with('faill' , 'something went wrong, please try agane later');
         }
     
    }
    
    public function addManager(Request $request ){
        //  return $request->input();
        $owner=User::where('id','=',session('LoggedUser'))-> first();
        $ownerId=$owner->id;
            $request->validate([
             'name' => ['required', 'string', 'max:255'],
            'username'=> ['required','unique:managers'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:managers'],
            'phone' => ['required', 'string', 'min:11', 'max:13', 'unique:managers'],
            'occupation' => ['required', 'string'],
            'home' => ['required', 'string','unique:managers'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],

        ]);
//return($request );
        $manager = new Manager();
        $manager->name=$request->name;
        $manager->username=$request->username;
        $manager->email=$request->email;
        $manager->phone=$request->phone;
        $manager->occupation=$request->occupation;
        $manager->home=$request->home;
        $manager->district=$request->district;
        $manager->city=$request->city;
        $manager->address=$request->address;
        $manager->owner_username=$ownerId;
        $save_menager=$manager->save();

        $user = new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->role_id= 2;
        $user->password= Hash::make($request->password);
        $save_user=$user->save();

        if( $save_menager &&  $save_user){
                
                return back()->with('successCreateOne' , 'new Manager has been added successfully');
                
            }else{
                //return back()->with('success' , 'new user has been added successfully');
                
                return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
            }

  }
  //Edit Manager
    public function editManager(Request $request,manager $manager,$id){
        $manager=Manager::find($id);
            
        $request->validate([
            //'username'=> ['required','unique:managers'],
           // 'email' => ['required', 'string', 'email', 'max:255', 'unique:managers'],
            'occupation' => ['required', 'string'],
            //'home' => ['required', 'string','unique:managers'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
        ]);
       
       // $manager->username=$request->username;
       // $manager->email=$request->email;
        $manager->occupation=$request->occupation;
       // $manager->home=$request->home;
        $manager->district=$request->district;
        $manager->city=$request->city;
        $manager->address=$request->address;
        $save=$manager->save();

        if( $save){
            return back()->with('successCreateOne' , 'Manager Update Successfully'); 
        }else{   
            return back()->with('faillCreateOne' , 'Manager Update Fail');
        }
    }
  //Destory Manager 
  public function destroyManager(manager $manager,$id){
    $manager=Manager::find($id);
          
    $manager->dlt=0;
    $save=$manager->save();

    if( $save){
        return back()->with('successCreateOne' , 'Manager Deleted Successfully'); 
    }else{   
        return back()->with('faillCreateOne' , 'Manager Deleted Fail');
    }

  }
}
