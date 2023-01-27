@extends('layout')

@section('title', 'Add New Cohort')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Cohort</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/cohorts" method="POST">

               @include('cohorts.form')

               <button type="submit" class="btn btn-primary">Add Cohort</button>
               
            </form>
        </div>
    </div>
@endsection

