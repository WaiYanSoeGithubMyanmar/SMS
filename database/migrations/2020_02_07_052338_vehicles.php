<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('vehicle_no',20);
            $table->string('vehicle_model',100)->nullable();
            $table->string('driver_name',50)->nullable();
            $table->string('driver_licence',50)->nullable();
            $table->string('driver_contact',20)->nullable();
            $table->string('note',200)->nullable();
            $table->string('is_active',25)->default("Yes");
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
        Schema::dropIfExists('vehicles');
    }
}
