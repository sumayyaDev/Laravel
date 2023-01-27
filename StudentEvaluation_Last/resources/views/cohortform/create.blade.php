@extends('layout')

@section('title', ' Contact Us')

@section('content')
    <h1>For Checking My Mistakes</h1>

    <form action="/contact" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>

        @csrf
        
        <button type="submit" class="btn btn-primary">Send Message</button>

    </form>

@endsection