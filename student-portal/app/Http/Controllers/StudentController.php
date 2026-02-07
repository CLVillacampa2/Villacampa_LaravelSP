<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Loads the Directory - Fixed the "Undefined variable $students"
    public function index()
    {
        $students = Student::all(); 
        return view('students.index', compact('students'));
    }

    // Loads the "Add" Form
    public function create()
    {
        return view('students.create');
    }

    // Saves the student and handles the "Duplicate Entry" error
    public function store(Request $request)
    {
        // 1. VALIDATION: This prevents the crash if the ID already exists
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'student_id_number' => 'required|unique:students,student_id_number', // Stops duplicates
            'course' => 'required',
            'email' => 'required|email|unique:students,email',
        ]);

        // 2. SAVE
        Student::create($request->all());
        
        // 3. REDIRECT with a success message
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        // Validation for update (ignoring the current student's ID)
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'student_id_number' => 'required|unique:students,student_id_number,' . $student->id,
            'course' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student removed.');
    }
}