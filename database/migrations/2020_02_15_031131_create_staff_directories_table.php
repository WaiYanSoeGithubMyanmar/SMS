<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_directories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('role_id')->unsigned();
            $table->integer('designation_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->string('name',200);
            $table->string('father_name', 200);
            $table->string('mother_name', 200);
            $table->string('email',200);
            $table->string('gender',50);
            $table->string('dob', 20);
            $table->string('phone', 200);
            // $table->string('emergency_contact_no' , 200);
            // $table->string('marital_status' ,100);
            $table->string('image',200);
            // $table->string('current_address',200);
            // $table->string('permanent_address', 200);
            // $table->string('qualification' ,200);
            // $table->string('work_exp', 200);
            // $table->string('note', 200);
            // $table->string('password', 200);
            // $table->string('epf_no', 200);
            // $table->string('basic_salary', 200);
            // $table->string('contract_type', 50);
            // $table->string('work_shift', 100);
            // $table->string('location', 100);
            // $table->string('medical_leave', 100);
            // $table->string('casual_leave', 100);
            // $table->string('maternity_leave', 100);
            // $table->string('account_title', 200);
            // $table->string('bank_account_no', 200);
            // $table->string('ifsc_code', 200);
            // $table->string('bank_branch_name', 100);
            // $table->string('facebook', 200);
            // $table->string('twitter', 200);
            // $table->string('instagram', 200);
            // $table->string('linkedin', 200);
            // $table->string('resume', 200);
            // $table->string('joining_letter', 200);
            // $table->string('other_document', 200);
            // $table->string('date_of_joining', 20);
            // $table->string('date_of_leaving', 20);
            $table->string('is_active', 25);
            $table->string('domain', 100);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('staff_directories');
    }
}
