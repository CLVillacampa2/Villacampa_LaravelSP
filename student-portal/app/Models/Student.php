<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // This line is MANDATORY to allow saving data from your form
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'student_id_number', 
        'course'
    ];
}