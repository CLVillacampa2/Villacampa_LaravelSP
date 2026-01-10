@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Student Profile</h3>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> John Doe</p>
            <p><strong>Email:</strong> john.doe@example.com</p>
            <p><strong>Course:</strong> BSIT</p>
            <p><strong>Year Level:</strong> 3rd Year</p>
            <hr>
            <a href="/students" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>
@endsection