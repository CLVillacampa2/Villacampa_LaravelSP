@extends('layout')

@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3 shadow-sm">
        <h1 class="display-5 fw-bold">Welcome to the Student Portal</h1>
        <p class="lead">A simple system to manage student records, courses, and profiles efficiently.</p>
        <hr class="my-4">
        
        <div class="row mt-4">
            <div class="col-md-6">
                <p>Ready to manage your directory? You can view, add, or update student information right now.</p>
                <a class="btn btn-primary btn-lg px-4" href="{{ route('students.index') }}" role="button">
                    <i class="bi bi-people"></i> View Student List
                </a>
                <a class="btn btn-outline-success btn-lg px-4" href="{{ route('students.create') }}" role="button">
                    <i class="bi bi-plus-circle"></i> Add New Student
                </a>
            </div>
        </div>
    </div>
@endsection