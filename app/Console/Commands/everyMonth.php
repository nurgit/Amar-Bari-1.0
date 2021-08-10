<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Rent;
use App\Models\Bill;
class everyMonth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature ='command:rentAdd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this will add  every month rent ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // DB::table('rents')->add();
        $renter_flats=DB::table('renter_flats')->get();
        $flat=DB::table('flats')->get();
       $count=count( $renter_flats);

       foreach($renter_flats as $renter_flat){
            if($renter_flat->dlt==1 && $renter_flat->status==1){

    //for bill table 
                $flats=DB::table('flats')
                ->where('flats.id',$renter_flat->flat_id)
                //->select('flats.rent')
                ->get();
                foreach($flats as $flat )
                {
                    $bill= new Bill();
                    $bill->renter_flat_id=$renter_flat->id;
                    $bill->month=date("m");
                    $bill->year=date("Y");
                    $bill->date=date("Y-m-d");
                    $bill->month_rent=$flat->rent;
                    $save=$bill->save();
                }
                
                
            
        //for rent table 
                $rent= new Rent();
             
                $rent->month=date("m");
                $rent->year=date("Y");
                $rent->date=date("Y-m-d");
                $rent->renter_flat_id=$renter_flat->id;
                $rent->month_rent=0;
                $rent->gas=0;
                $rent->electricity=0;
                $rent->water=0;
                $rent->serviceCharge=0;
                $rent->others=0;
                $save=$rent->save();


            
            }
        }


            echo"operation done ";
    }
}
