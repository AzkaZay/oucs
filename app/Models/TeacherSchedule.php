<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSchedule extends Model
{
    protected $table = 'teacher_schedules'; // Assuming your table name is 'student_schedules'
    protected $fillable = ['teacher_id', 'created_by', 'course_name', 'module_name', 'class', 'datetime', 'number_of_students'];
}
