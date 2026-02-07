@extends('layout')

@section('content')
    <h2 class="mb-4 fw-bold">Student Directory</h2>
    
    {{-- Success Message Alert --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Student ID</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->student_id_number }}</td>
                    <td class="text-center">
                        {{-- FIXED: Passing the object $student fixes the "Undefined Variable" on the next page --}}
                        <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm text-white">View</a>
                        
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                        
                        {{-- Delete Form --}}
                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection