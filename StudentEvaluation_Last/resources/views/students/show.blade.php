@extends('layouts.app')

@section('title', 'Details for ' . $student->name)

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Details for {{ $student->name }}</h1>
        <p><a href="/students/{{ $student->id }}/edit">Edit</a></p>
        
        <form action="/students/{{ $student->id }}" method="POST">
          @method('DELETE')
          @csrf 
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>

        </div>
    </div>


    <div class="row">
      <div class="col-12">
        <p><strong>Name</strong>  {{ $student->name }}</p>
        <p><strong>Email</strong>  {{ $student->email }}</p>    
      </div>
    </div>


@endsection