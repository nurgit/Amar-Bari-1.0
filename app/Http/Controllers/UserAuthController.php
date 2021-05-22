<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(){
        return view('auth.login');
     }

    public function loginCheck(Request $request){
        //return $request->input();

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',  'min:5','max:12', ],
        ]);

        $userInfo=User::where('email','=', $request->email)->first();
        if(! $userInfo){
            return back()->with('failLog', 'We do not recogonize your email address');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                //return redirect('admin/dashbord');
            /// return route('admin.dashbord');

            if($userInfo->role_id==1){  

                $dltUser=$userInfo->dlt;
                if($dltUser==0){  
                    return redirect('dltNotification');
                    //return redirect('owner/dashboard');
                
                }elseif($dltUser ==1){
                    return redirect('owner/dashboard');
                }
              
            }elseif($userInfo->role_id==2){
                return redirect('manager/dashboard');
            }elseif($userInfo->role_id==3){
                return redirect('renter/dashboard');
            }elseif($userInfo->role_id==4){
                return redirect('admin/dashboard');
            }
            }else{
                return back()->with('failLog','incorret password');
            }
        }
    }

    
    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }




    


     public function create(Request $request){
        //  return $request->input();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username'=> ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:11', 'max:13', 'unique:users'],
            'password' => ['required', 'string', 'min:5','max:12', ],
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password= Hash::make($request->password);
        $save=$user->save();

        if( $save){
          
            return back()->with('successCreateOne' , 'new user has been added successfully');
        }else{
            //return back()->with('success' , 'new user has been added successfully');
            
            return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
        }
     }
}
