<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $table = 'studentcourses';
    protected $fillable = [
        'student_id',
        'course_id'
        
    ];

    public function StudentCourse()
    {
        return $this->belongsToMany('Student');
    }

    public function course()
    {
        return $this->hasOne('Course');
    }


}
