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

            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('occupation');
            $table->string('home')->unique();
            $table->string('district');
            $table->string('city');
            $table->string('address'); 
            $table->integer('status')->default(0);//0=inactive ,1= active 
            $table->integer('dlt')->default(1);// 1=Owner, 2=Manager, 3=Renter, 4=Admin
            
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
