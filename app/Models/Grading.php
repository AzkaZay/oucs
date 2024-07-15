<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grading extends Model
{
    use HasFactory;

    protected $table = 'gradings';  // Ensure this matches the actual table name in your database

    protected $fillable = [
        'student_id',
        'full_name',
        'module_name',
        'grading',
        'semester',
    ];
}
