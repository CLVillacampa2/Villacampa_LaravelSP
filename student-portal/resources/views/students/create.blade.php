@extends('layout')

@section('content')
    <div class="card shadow-sm mx-auto" style="max-width: 500px;">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Add New Student</h4>
        </div>
        <div class="card-body">
            <form action="/students">
                <div class="mb-3">
                    <label class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter full name">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Course</label>
                    <select class="form-select">
                        <option selected disabled>Select Course</option>
                        <option value="IT">Information Technology (IT)</option>
                        <option value="CS">Computer Science (CS)</option>
                        <option value="IS">Information Systems (IS)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Year Level</label>
                    <select class="form-select">
                        <option selected disabled>Select Year</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Save Student</button>
                    <a href="/students" class="btn btn-light border">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection