<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('occupation')->nullable();
            $table->string('home')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('owners');
    }
}
