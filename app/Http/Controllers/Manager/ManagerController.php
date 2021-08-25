<?php

namespace App\Http\Controllers\Manager;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Owner;
use App\Models\house;
use Illuminate\Support\Facades\DB;


class ManagerController extends Controller
{
    //
    public function index(){
        //return( 123);

        $data=User::where('id','=',session('LoggedUser'))-> first();
     //  return( $data->email);
        $houses =DB::table('houses')
         ->join('owners', 'houses.owner_username', 'owners.username')
         ->join('managers','owners.username','managers.owner_username')
        ->where('managers.email',$data->email)
        ->get();
        //dd($houses);
        //return( $houses);
        return view('manager.dashboard', compact('houses') );
    }

}
