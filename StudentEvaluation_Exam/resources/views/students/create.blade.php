@extends('layouts.app')

@section('title', 'Add New Student')

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Add New Student</h1>
        </div>
    </div>


    <div class="row">
      <div class="col-12">
            <form action="/students" method="POST">
                
                @include('students.form')
                
                <button type="submit" class="btn btn-primary">Add Student</button>
                
           </form>
        </div>
    </div>


@endsection