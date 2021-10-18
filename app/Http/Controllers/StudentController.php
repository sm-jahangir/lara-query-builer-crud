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
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','email'],
            'class' => ['required'],
            'student_bio' => ['required'],
            'course_time' => ['required'],
            'subject' => ['required'],
            'image' => ['required'],
        ]);

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
    public function edit($id)
    {
        $data = DB::table('students')->where('id', $id)->get();
        return view('student.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','email'],
            'class' => ['required'],
            'student_bio' => ['required'],
            'course_time' => ['required'],
            'subject' => ['required'],
        ]);
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
        DB::table('students')->where('id', $id)->update($student);
        return redirect()->route('student.index');
    }
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return back();
    }
}
