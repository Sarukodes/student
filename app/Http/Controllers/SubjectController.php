<?php

namespace App\Http\Controllers;
use \App\Models\sub;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
public function add(){
    return view('subject.add');
}
public function save(Request $request){
    $subject=new sub();
    $subject->subject=$request->subject;
    $subject->save();
return redirect('subject/list');
}
public function list(){
    $subjects=sub::all();
    return view('subject.view',compact('subjects'));

}
}
