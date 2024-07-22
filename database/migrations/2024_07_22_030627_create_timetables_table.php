<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');          // Add these fields if they are not already present
            $table->string('course_name');
            $table->string('module_name');
            $table->string('cohort');
            $table->string('instructor');
            $table->string('day');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->string('head_of_department');
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
        Schema::dropIfExists('timetables');
    }
};
