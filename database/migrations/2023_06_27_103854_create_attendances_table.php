<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->datetime('attendance_date');
            $table->string('attendance_type');
            $table->time('clock_in')->nullable();
            $table->time('clock_in_actual')->nullable();
            $table->string('clock_in_note')->nullable();
            $table->time('clock_out')->nullable();
            $table->time('clock_out_actual')->nullable();
            $table->string('clock_out_note')->nullable();
            $table->string('update_by');
            $table->dateTime('update_date')->nullable();
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
        Schema::dropIfExists('attendances');
    }
}
