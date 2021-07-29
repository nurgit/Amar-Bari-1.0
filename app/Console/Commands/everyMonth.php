<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Rent;
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
       $count=count( $renter_flats);

       foreach($renter_flats as $renter_flat){
        if($renter_flat->dlt==1 && $renter_flat->status==1){
        $rent= new Rent();
        $a=$renter_flat->id;
        $rent->date=date("Y-m-d");
        $rent->renter_flat_id=$a;
        $rent->amount=0;
        $save=$rent->save();
      }
       }


        echo"operation done ";
    }
}
