<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('year');
            $table->date('date');
            $table->integer('renter_flat_id');

            $table->double('month_rent');
            $table->double('gas')->default(0);
            $table->double('electricity')->default(0);
            $table->double('water')->default(0);
            $table->double('serviceCharge')->default(0);
            $table->double('others')->default(0);
            
            $table->integer('status')->default(1);//0=inactive ,1= active 
            $table->integer('dlt')->default(1);// 0=dlt , 1=not dlt


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
