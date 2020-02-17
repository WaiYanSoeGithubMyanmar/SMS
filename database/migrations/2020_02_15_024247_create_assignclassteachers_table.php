<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignclassteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignclassteachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('class_id')->unsigned();
            $table->char('staff_id',100);
            $table->integer('section_id')->unsigned();
            $table->char('is_active', 25)->default('yes');
            $table->char('domain',100);
            $table->integer('session_id')->unsigned();
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
        Schema::dropIfExists('assignclassteachers');
    }
}
