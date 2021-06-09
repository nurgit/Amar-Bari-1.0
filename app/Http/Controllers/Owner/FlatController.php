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
        ->get();
        return $flats;
       // select * from 'flats' where house_id in (select house_id from house)
        // $f=$flat->username;
        
        // return $f;
        //  $data=User::where('id','=',session('LoggedUser'))-> first();
        // $username=$data->username;
        // return    $username;
// foreach($flats as $flat){
//     if($flat->username== $username){
//         return $flat;
//     }
//}
        //$data=['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))-> first()];
       
       
        // $data=User::where('id','=',session('LoggedUser'))-> first();
        // $username=$data->username;

        // $houses=House::where('owner_username','=',$username)-> get();
     
        // //arr[]
        // foreach ($houses as $house) {
        //     $houseId=$house->id;
        //     $flats=Flat::where('house_id','=', $houseId)->get();
           
            
        //     return $flats;
        //     return view('owner.flat',$flats);
        // }
          
         

         //return view('owner.flat',$flats);

        //   $flat=Flat::where('house_id','=', $houseId)->get();
        //   return $flat;

        // $row = count($houses);
        // for ($x = 0; $x<=  $row; $x++) {
        //     $index=$x;
        //     $houseId=$houses[$index]->id;
        //     $flats=Flat::where('house_id','=', $houseId)->get();
        //     echo $flats;
        //   }
        
      // $flat=Flat::where('house_id','=', $houseId)->get();
     
        
    }


}
