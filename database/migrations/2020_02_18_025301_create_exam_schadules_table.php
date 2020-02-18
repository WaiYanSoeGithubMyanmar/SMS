<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamSchadulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_schadules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id')->nullable();
            $table->string('exam_id')->nullable();
            $table->string('assign_subject_id')->nullable();
            $table->string('date_of_exam')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('room_no')->nullable();
            $table->string('full_marks')->nullable();
            $table->string('passing_marks')->nullable();
            $table->string('note')->nullable();
            $table->string('is_active')->nullable();
            $table->string('domain')->nullable();
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
        Schema::dropIfExists('exam_schadules');
    }
}
