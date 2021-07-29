<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtlitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utlities', function (Blueprint $table) {
            $table->id();
            $table->double('gas');
            $table->double('electricity');
            $table->double('water');
            $table->double('serviceCharge');
            $table->double('others');
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
        Schema::dropIfExists('utlities');
    }
}
