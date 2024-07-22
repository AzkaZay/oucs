<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $table = 'timetables';

    protected $fillable = [
        'course_code',       // Add these fields if they are not already present
        'course_name',
        'module_name',
        'cohort',
        'instructor',        // Add these fields if they are not already present
        'day',
        'date',
        'time',
        'location',
        'head_of_department' // Add these fields if they are not already present
    ];

    protected $casts = [
        'date' => 'date',
        'time' => 'datetime:H:i', // Adjust if needed
    ];
}
