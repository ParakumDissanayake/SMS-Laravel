<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];

    public function Courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses');
    }
}
