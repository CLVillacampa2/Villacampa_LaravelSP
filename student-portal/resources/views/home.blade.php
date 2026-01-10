@extends('layout')

@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <h1>Welcome to the Student Portal</h1>
        <p class="lead">A simple system to manage student records, courses, and profiles efficiently.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/students" role="button">View Student List</a>
    </div>
@endsection