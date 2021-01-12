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
            $table->id();
            $table->string('title');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('dob');
            $table->string('gender');
            $table->integer('school_id');
            $table->string('registration_date');
            $table->string('registration_status'); 
            $table->text('religion');
            $table->text('comments');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('students');
    }
}
