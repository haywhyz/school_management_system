<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_relatives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('gender'); 
            $table->string('relative_type');
            $table->date('dob');
            $table->string('education_level');
            $table->string('occupation');
            $table->boolean('isActive');
            $table->string('username');
            $table->string('password');
            $table->string('religion');
            $table->text('comments'); 
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
        Schema::dropIfExists('student_relatives');
    }
}
