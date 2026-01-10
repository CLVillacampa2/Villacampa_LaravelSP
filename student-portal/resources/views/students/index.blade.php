@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student List</h2>
        <a href="/students/create" class="btn btn-success">Add New Student</a>
    </div>

    <table class="table table-hover border">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td><span class="badge bg-info text-dark">BSIT</span></td>
                <td>3rd Year</td>
                <td class="text-center">
                    <a href="/students/1" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="/students/1/edit" class="btn btn-sm btn-outline-warning">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection