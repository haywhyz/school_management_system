<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeOtherDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_other_data', function (Blueprint $table) {
            $table->id();
            $table->string('tax_id')->nullable();
            $table->string('tax_office')->nullable();
            $table->string('identity_number')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('issuing_authority')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('local_government')->nullable();
            $table->string('state')->nullable();
            $table->string('nationality')->nullable();
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
        Schema::dropIfExists('employee_other_data');
    }
}
