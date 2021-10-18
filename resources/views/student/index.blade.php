@extends('layouts.app')
@section('content')
<h1 class="text-center">Laravel CRUD Operation By Query Builder</h1>
<hr>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <strong>Student List</strong>
                </div>
                <div class="col">
                    <a name="" id="" class="btn btn-primary float-right" href="{{route('student.create')}}" role="button">Add New Student</a>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CLASS</th>
                        <th scope="col">SUBJECT</th>
                        <th scope="col">COURSES TIME</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->class}}</td>
                            <td>{{$data->subject}}</td>
                            <td>{{$data->course_time}}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary" href="{{route('studnet.edit',$data->id)}}" role="button">Edit</a>
                                <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$data->id}}').submit();" class="btn btn-danger" role="button">Delete</a>
                                <form id="delete-form-{{$data->id}}" action="{{url('student'.'/'.$data->id)}}" style="display: none" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
