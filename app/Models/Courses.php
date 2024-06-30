<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses'; // Assuming your table name is 'student_schedules'

    protected $fillable = [
        'course_id',
        'course_name',
        'hod',
        'year_introduced',
        'number_of_students',
    ];
}
