@extends('layout')

@section('title', 'Welcome to cohort of ' . $cohort->name)

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Details for {{ $cohort->name }}</h1>
        <p><a href="/cohorts/{{ $cohort->id }}/edit">Edit</a></p>
        
        <form action="/cohorts/{{ $cohort->id }}" method="POST">
          @method('DELETE')
          @csrf 
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>

        </div>
    </div>


    <div class="row">
      <div class="col-12">
        <p><strong>Name</strong>  {{ $cohort->name }}</p> 
      </div>
    </div>

    <div class="container">
                <ul class="nav py-3"> 

                    <li class="nav-item">
                        <a class="nav-link" href="/students">Student List</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Take Exam</a>
                    </li>
                </ul>
    </div>


        

@endsection

<!-- @section('content')
    <div class="row">
        <div class="col-12">
            <h1>Welcome to Cohort Of {{ $cohort->name }}</h1>
            
            <div class="container">
                <ul class="nav py-3"> 
                    <li class="nav-item">
                        <a class="nav-link" href="/students">Student List</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Take Exam</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection -->