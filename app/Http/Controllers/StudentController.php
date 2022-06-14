<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function create(){

        return view('/add');

    }
    
    public function store(Request $request){
        $student= new student();
        $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->course=$request->input('course');
        $student->section=$request->input('section');
        $student->save();
        return redirect()->back()->with('status','data insert successfully');


    }

    public function index(){
      $student= student::all();
      return view('show',compact('student'));

    }

    public function edit($id){
    
        $student= student::find($id);
        return view('edit', compact('student'));


    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
 public function destroy($id){

    $student= student::find($id);
    $student->delete();
    return redirect()->back()->with('status','student data delete successfully');
 }
    
 public function image(Request $request)
 {
     $student = new Student;
     $student->name = $request->input('name');

     if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('uploads/students/', $filename);
         $student->image = $filename;
     }

     $student->save();
     return redirect('/image')->with('message','Student Image Upload Successfully');
 }
}
