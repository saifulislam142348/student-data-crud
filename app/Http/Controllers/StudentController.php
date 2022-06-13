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
    
}
