@extends('layouts.app')

@section('title', 'Edit Details for ' . $cohort->name)

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Edit Details for {{ $cohort->name }}</h1>
        </div>
    </div>


    <div class="row">
      <div class="col-12">
            
            <form action="/cohorts/{{ $cohort->id }}" method="POST">
                @method('PATCH')
                @include('cohorts.form')
                
                <button type="submit" class="btn btn-primary">Save Cohort</button>
                
           </form>
        </div>
    </div>


@endsection