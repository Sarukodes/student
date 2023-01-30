<?php

namespace App\Http\Controllers;
use App\models\student;
use App\models\sub;
use App\Models\result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function add()
    {
        $students = student::all();
        $subjects = sub::all();
        return view('result.add',compact('students','subjects'));

    }
    public function save(Request $request){
        $results=new result();
        $results->mark=$request->mark;
        $results->class=$request->class;
        $results->rollno=$request->rollno;
        $results->address=$request->address;
        $results->student_id=$request->student_id;
        $results->subject_id=$request->subject_id;
         $results->save();
         return redirect('result/list');
    }
    public function list(Request $request){
        $Results= result::all();
        return view('result.view',compact('Results'));

    }
}
