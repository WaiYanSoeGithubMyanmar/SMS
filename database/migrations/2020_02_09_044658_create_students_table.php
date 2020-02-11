<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admission_no');
            $table->string('name');
            $table->string('image');
            $table->string('moibleno');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('religion');
            $table->string('blood_group');

            $table->string('height');
            $table->string('weight');
            $table->string('roll_no');
            $table->string('class_sections_id');
            $table->string('admission_date');
            $table->string('register_date');
            $table->string('father_name');
            $table->string('father_nrc');
            $table->string('father_job');
            $table->string('father_photo');


            $table->string('mother_name');
            $table->string('mother_nrc');
            $table->string('mother_job');
            $table->string('mother_photo');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_job');
            $table->string('guardian_relation');
            $table->string('guardian_email');
            $table->string('guardian_photo');

            $table->string('guardian_address');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('previous_school');
            $table->string('route_id');
            $table->string('hostel_room_id');
            $table->string('session_start');
            $table->string('session_end');
            $table->string('note');
            $table->string('disable_at');

            $table->string('is_active');
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
        Schema::dropIfExists('students');
    }
}
