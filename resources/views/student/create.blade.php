@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card m-5">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <strong>Student Add Form</strong>
                </div>
                <div class="col">
                    <a name="" id="" class="btn btn-primary float-right" href="#" role="button">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your email">
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <select class="form-control" name="class" id="class">
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select class="form-control" name="subject" id="subject">
                        <option>Science</option>
                        <option>Arts</option>
                        <option>Commerce</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="course_time"> Cources Time </label>
                    <select class="form-control" name="course_time" id="course_time">
                        <option>6 Month</option>
                        <option>1 Year</option>
                        <option>2 Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="student_bio"> Student Bio</label>
                    <textarea class="form-control" name="student_bio" id="student_bio" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" placeholder="Enter Your Image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection
