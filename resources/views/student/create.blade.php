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
                    <a name="" id="" class="btn btn-primary float-right" href="{{route('student.index')}}" role="button">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter Your Name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter Your email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <select class="form-control  @error('class') is-invalid @enderror" name="class" id="class">
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                    @error('class')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select class="form-control  @error('subject') is-invalid @enderror" name="subject" id="subject">
                        <option>Science</option>
                        <option>Arts</option>
                        <option>Commerce</option>
                    </select>
                    @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="course_time"> Cources Time </label>
                    <select class="form-control  @error('course_time') is-invalid @enderror" name="course_time" id="course_time">
                        <option>6 Month</option>
                        <option>1 Year</option>
                        <option>2 Year</option>
                    </select>
                    @error('course_time')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="student_bio"> Student Bio</label>
                    <textarea class="form-control  @error('student_bio') is-invalid @enderror" name="student_bio" id="student_bio" rows="3"></textarea>
                    @error('student_bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file  @error('image') is-invalid @enderror" name="image" id="image" placeholder="Enter Your Image">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection
