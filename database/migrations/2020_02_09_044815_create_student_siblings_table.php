<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSiblingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_siblings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admission_no')->nullable();
            $table->string('sibling_admission_no')->nullable();
            $table->string('is_active')->nullable();
            $table->string('domain')->nullable();
            $table->string('session_id')->nullable();
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
        Schema::dropIfExists('student_siblings');
    }
}
