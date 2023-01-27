@extends('layout')

@section('title', 'Student Cohort List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Student Cohort List</h1>
            <p><a href="cohorts/create">Add New Cohort</a></p>
        </div>
    </div>

    @foreach($cohorts as $cohort)
       <div class="row">
            <div class="col-2">
                {{ $cohort->id }}
            </div>
            <div class="col-4">
                <a href="/cohorts/{{ $cohort->id }}">{{ $cohort->name }}</a>
            </div>
            
       </div>
    @endforeach

@endsection