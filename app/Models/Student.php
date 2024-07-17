<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'gender',
        'date_of_birth',
        'roll',
        'email',
        'class',
        'admission_id',
        'address',
        'phone_number',
        'upload',
    ];
}
