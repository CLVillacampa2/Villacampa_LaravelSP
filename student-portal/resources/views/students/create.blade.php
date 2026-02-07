@extends('layout')

@section('content')
    <div class="card shadow-sm mx-auto" style="max-width: 500px;">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Add New Student</h4>
        </div>
        <div class="card-body">
            {{-- This block only shows up if there is a validation error --}}
            @if ($errors->any())
                <div class="alert alert-danger shadow-sm">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.store') }}" method="POST">
                @csrf 

                <div class="mb-3">
                    <label class="form-label fw-bold">First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter first name" value="{{ old('first_name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter last name" value="{{ old('last_name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Student ID Number</label>
                    <input type="text" name="student_id_number" class="form-control" placeholder="e.g. 2024-0001" value="{{ old('student_id_number') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Course</label>
                    <select name="course" class="form-select" required>
                        <option value="" selected disabled>Select Course</option>
                        <option value="BSIT" {{ old('course') == 'BSIT' ? 'selected' : '' }}>BSIT</option>
                        <option value="BSCS" {{ old('course') == 'BSCS' ? 'selected' : '' }}>BSCS</option>
                        <option value="BSIS" {{ old('course') == 'BSIS' ? 'selected' : '' }}>BSIS</option>
                    </select>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-success">Save Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-light border">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection