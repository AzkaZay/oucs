<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('module_name');
            $table->string('class');
            $table->dateTime('datetime');
            $table->integer('number_of_students');
            // Add any other columns you need for your teacher schedules
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_schedules');
    }
}
