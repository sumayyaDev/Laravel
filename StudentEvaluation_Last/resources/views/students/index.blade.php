@extends('layouts.app')

@section('title', 'Student List')

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Student List</h1>
        <p><a href="students/create">Add New Student</a></p>
        </div>
    </div>

    @foreach($students as $student)
        <div class="row">
            <div class="col-2">
                {{ $student->id }}
            </div>
            <div class="col-4">
                <a href="/students/{{ $student->id }}">{{ $student->name }}</a>
            </div>
        </div> 
    @endforeach
    

@endsection