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
            $table->string('employee_id');
            $table->string('employee_name');
            $table->string('employee_photo')->nullable();
            $table->string('employee_phone')->nullable();
            $table->string('employee_email')->nullable();
            $table->string('company_id')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('organization_id')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('employee_status')->nullable();
            $table->string('note')->nullable();
            $table->string('nik')->nullable();
            $table->dateTime('updated_date')->nullable();
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
