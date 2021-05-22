<?php

namespace App\Http\Middleware;
use App\Models\User;
use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $roleId=User::where('email','=', $request->email)->first();
        // $roleName=Role::user()->id;
        // if($roleName==1){

        // }
        // if(Auth::check() && Auth::user()->role->id==1){
        //     return $next($request);
        // }else{
        //     return redirect('/login');
        // }

        return $next($request);
    }
}
