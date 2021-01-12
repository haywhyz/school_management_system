<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('gender');
            $table->boolean('status');  
            $table->date('dob');
            $table->string('education_level'); 
            $table->string('religion');  
            $table->string('employee_type');
            $table->string('subject')->nullable();
            $table->date('employment_date');
            $table->date('deactivation_date');
            $table->boolean('isActive'); 
            $table->string('username');
            $table->string('password');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_address');
            $table->text('medical')->nullable(); 
            $table->text('comments')->nullable(); 
            $table->string('passport')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
