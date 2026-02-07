@extends('layout')

@section('content')
    <div class="card shadow-sm"> {{-- Added shadow to match your UI style [cite: 137] --}}
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Student Profile</h3>
        </div>
        <div class="card-body">
            {{-- These variables fetch data from the database using the $student object [cite: 140, 141] --}}
            <p><strong>First Name:</strong> {{ $student->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Student ID:</strong> {{ $student->student_id_number }}</p>
            <p><strong>Course:</strong> {{ $student->course }}</p>
            
            <hr>
            {{-- Use the named route for the back button [cite: 142] --}}
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>
@endsection