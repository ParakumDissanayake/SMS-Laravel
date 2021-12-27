<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function register(Request $request)
    {

        $students = new Student();

        $students->name = $request->input('name');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->status = $request->input('status');

        $courses = $request->input('course_id');
        // dd($request->input('course_id'));
        
        $students->save();

        // foreach($courses as $course){
            $students->Courses()->attach($courses);
            return response()->json($students);
    }

    public function index()
    {
      $students = Student::all();
      return response()->json($students);
    }

    public function studentWithCourses()
    {
      $students = Student::with('Courses')->get();
      return response()->json($students);
    }

}
