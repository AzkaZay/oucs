<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('student_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('module_name');
            $table->string('class');
            $table->dateTime('datetime');
            $table->integer('number_of_classes');
            $table->string('created_by');
            // Add any other columns you need for your student schedules
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_schedules');
    }
}
