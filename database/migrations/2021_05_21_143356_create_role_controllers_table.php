<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_controllers', function (Blueprint $table) {
            $table->id();//1=Owner, 2=Manager, 3=Renter, 4=Admin
            $table->string('role_name');
            $table->integer('status');//0=inactive ,1= active 
            $table->integer('dlt');// 0=NOT dlt, 1=dlt
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
        Schema::dropIfExists('role_controllers');
    }
}
