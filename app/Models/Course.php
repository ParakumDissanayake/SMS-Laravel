<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'code',
        'name',
        'description'
        
    ];

    public function Students()
    {
        return $this->hasMany(Student::class,'student_courses');
    }
}
