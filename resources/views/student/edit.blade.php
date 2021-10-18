@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card m-5">
        
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <strong>Student Edit Form</strong>
                </div>
                <div class="col">
                    <a name="" id="" class="btn btn-primary float-right" href="{{route('student.index')}}" role="button">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('student'.'/'.$data[0]->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" value="{{$data[0]->name}}" placeholder="Enter Your Name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{$data[0]->email}}" id="email" placeholder="Enter Your email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <select class="form-control  @error('class') is-invalid @enderror" name="class" id="class">
                        <option {{$data[0]->class == 'One' ? 'selected' : ''}}>One</option>
                        <option {{$data[0]->class == 'Two' ? 'selected' : ''}}>Two</option>
                        <option {{$data[0]->class == 'Three' ? 'selected' : ''}}>Three</option>
                    </select>
                    @error('class')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select class="form-control  @error('subject') is-invalid @enderror" name="subject" id="subject">
                        <option {{$data[0]->subject == 'Science' ? 'selected' : ''}}>Science</option>
                        <option {{$data[0]->subject == 'Arts' ? 'selected' : ''}}>Arts</option>
                        <option {{$data[0]->subject == 'Commerce' ? 'selected' : ''}}>Commerce</option>
                    </select>
                    @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="course_time"> Cources Time </label>
                    <select class="form-control  @error('course_time') is-invalid @enderror" name="course_time" id="course_time">
                        <option {{$data[0]->course_time == '6Month' ? 'selected' : ''}}>6 Month</option>
                        <option {{$data[0]->course_time == '1Year' ? 'selected' : ''}}>1 Year</option>
                        <option {{$data[0]->course_time == '2Year' ? 'selected' : ''}}>2 Year</option>
                    </select>
                    @error('course_time')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="student_bio"> Student Bio</label>
                    <textarea class="form-control  @error('student_bio') is-invalid @enderror" name="student_bio" id="student_bio" rows="3">{{$data[0]->name}}</textarea>
                    @error('student_bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col col-md-4">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file  @error('image') is-invalid @enderror" name="image" id="image" placeholder="Enter Your Image">
                        </div>
                        <div class="col col-md-8">
                            <img style="width: 150px;" src="{{asset('storage/student').'/'.$data[0]->image}}" alt="">
                        </div>
                    </div>
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
