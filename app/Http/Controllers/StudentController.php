<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->paginate(4);
        return view('student.index', compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $student = [];
        $student['name'] = $request->name;
        $student['email'] = $request->email;
        $student['class'] = $request->class;
        $student['subject'] = $request->subject;
        $student['course_time'] = $request->course_time;
        $student['student_bio'] = $request->student_bio;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/student', $file);
            $student['image']=$file;
        }
        DB::table('students')->insert($student);
        return redirect()->route('student.index');
    }
    public function edit()
    {
        
    }
    public function update()
    {
        
    }
    public function destroy()
    {
        
    }
}
