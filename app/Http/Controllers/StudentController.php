<?php

namespace App\Http\Controllers;

use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add()
    {
        return view('student.add');
    }
    public function save(Request $request)
    {
        $student = new student();
        $student->name = $request->name;
        $student->save();
        return redirect('student/list');
    }
    public function list()
    {
        $students = student::all();
        //dd($students);
        return view('student.view', compact('students'));
    }
}
