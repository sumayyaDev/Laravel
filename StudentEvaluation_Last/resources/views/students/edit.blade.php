@extends('layouts.app')

@section('title', 'Edit Details for ' . $student->name)

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Edit Details for {{ $student->name }}</h1>
        </div>
    </div>


    <div class="row">
      <div class="col-12">
            <form action="/students/{{ $student->id }}" method="POST">
                @method('PATCH')
                @include('students.form')
                
                <button type="submit" class="btn btn-primary">Save Student</button>
                
           </form>
        </div>
    </div>


@endsection