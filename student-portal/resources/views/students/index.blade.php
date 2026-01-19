@extends('layout')

@section('content')
    <h2 class="mb-4 fw-bold">Student Directory</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm bg-white">
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
                    <td>Information Technology (IT)</td>
                    <td>3rd Year</td>
                    <td class="text-center">
                        {{-- Using our components for View, Edit, and Delete --}}
                        <x-action-button href="/students/show" color="info">View</x-action-button>
                        <x-action-button href="/students/edit" color="warning">Edit</x-action-button>
                        <x-action-button href="#" color="danger">Delete</x-action-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection