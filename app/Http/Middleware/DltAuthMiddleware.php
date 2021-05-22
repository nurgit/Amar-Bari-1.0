<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class DltAuthMiddleware
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
        // $dlt=User::where('email','=', $request->email)->first();
        // $dltUser=$dlt->dlt;
        // if($dltUser==0){  
        //     return redirect('dltNotification');
        //     //return redirect('owner/dashboard');
        
        // }elseif($dltUser ==1){
        //     return $next($request);
        // }

        // if ($request->user()->email=='ab@gmail.com'){
        //     return $next($request);
        // }else{
        //     return redirect('dltNotification');
        // }

        //if($request->user->dlt==1)
       return $next($request);
    }
}
