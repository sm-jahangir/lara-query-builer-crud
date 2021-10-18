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
                    <a name="" id="" class="btn btn-primary float-right" href="#" role="button">Add New Student</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Jahangir Alam</td>
                        <td>samraatjahangir@gmail.com</td>
                        <td>Honours 3rd Year</td>
                        <td>Physics</td>
                        <td>4 Years</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Edit</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
