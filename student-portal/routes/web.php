<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// This is the home page route
Route::resource('students', StudentController::class);
Route::get('/', function () {
    return view('home');
})->name('home');

// I fixed these to match the folder name "students" (with an 's')
Route::get('/students', function () {
    // This looks for resources/views/students/index.blade.php
    return view('students.index'); 
})->name('students.index');

Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

Route::get('/students/show', function () {
    return view('students.show');
})->name('students.show');

Route::get('/students/edit', function () {
    return view('students.edit');
})->name('students.edit');

Route::resource('students', StudentController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');