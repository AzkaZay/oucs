<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSchedule extends Model
{
    protected $table = 'student_schedules'; // Assuming your table name is 'student_schedules'
    protected $fillable = ['student_id','module_name', 'class', 'datetime', 'number_of_classes', 'created_by'];
}
