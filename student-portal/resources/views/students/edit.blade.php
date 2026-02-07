@extends('layout')

@section('content')
    <div class="card shadow-sm mx-auto" style="max-width: 500px;">
        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Student</h4>
        </div>
        <div class="card-body">
            {{-- 1. Point action to the Update route and include the student ID --}}
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                {{-- 2. Laravel requires @method('PUT') for updates --}}
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Course</label>
                    <select name="course" class="form-select">
                        <option value="IT" {{ $student->course == 'IT' ? 'selected' : '' }}>Information Technology (IT)</option>
                        <option value="CS" {{ $student->course == 'CS' ? 'selected' : '' }}>Computer Science (CS)</option>
                        <option value="IS" {{ $student->course == 'IS' ? 'selected' : '' }}>Information Systems (IS)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Student ID Number</label>
                    <input type="text" name="student_id_number" class="form-control" value="{{ $student->student_id_number }}">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-light border">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection