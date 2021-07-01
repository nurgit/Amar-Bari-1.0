<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Redirect;

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
        if(! $userInfo){// 
            return back()->with('failLog', 'We do not recogonize your email address');
        }else{
            if(Hash::check($request->password, $userInfo->password))    {
                $request->session()->put('LoggedUser',$userInfo->id);
                if($userInfo->dlt==0){  //if accout delete 
                    return redirect('/contact')->with('failLog', 'Your Accout Maybe Deletated. Please Contact Us.');
                }elseif($userInfo->dlt ==1){//if accout not delete 
                    if($userInfo->status==0){// If accout status Inacctive
                        return redirect('/contact')->with('failLog', 'Your Accout Inacctive. Please Weate For Acctivation Or Contact Us.');
                    }elseif($userInfo->status ==1){// if accout status  Acctive

                        // Role Id Check 
                        if($userInfo->role_id==1){
                            return redirect('owner/dashboard');
                        }elseif($userInfo->role_id==2){
                            return redirect('manager/dashboard');
                        }elseif($userInfo->role_id==3){
                            return redirect('renter/dashboard');
                        }elseif($userInfo->role_id==4){
                            return redirect('admin/dashboard');
                        }
                    } 
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




    
//Registation------------------------------------------------------------

     public function create(Request $request){
        //  return $request->input();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username'=> ['required','unique:users'],
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
          
            return redirect('/contact')->with('createSuccess', 'Your Accout your account created successfully. Please Weate For Acctivation Or Contact Us.');
            
         }else{
        //     //return back()->with('success' , 'new user has been added successfully');
            
            return back()->with('faillCreateOne' , 'something went wrong, please try agane later');
         }
     }
}
