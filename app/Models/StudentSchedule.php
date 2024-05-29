<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSchedule extends Model
{
    protected $table = 'student_schedules'; // Assuming your table name is 'student_schedules'
    protected $fillable = ['module_name', 'class', 'datetime', 'number_of_classes'];
}
