<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home Route
// Matches {{ route('home') }} in your layout
Route::get('/', function () {
    return view('home');
})->name('home');


// 2. Student Routes Group
// This groups all URLs starting with /students and names starting with students.
Route::prefix('students')->name('students.')->group(function () {

    // List Page: Matches {{ route('students.index') }}
    Route::get('/', function () {
        return view('students.index');
    })->name('index');

    // Create Page: Matches {{ route('students.create') }}
    Route::get('/create', function () {
        return view('students.create');
    })->name('create');

    // View Profile: Matches {{ route('students.show', id) }}
    // The {id} allows urls like /students/1 or /students/2
    Route::get('/{id}', function ($id) {
        // We pass the ID to the view so we can simulate data later
        return view('students.show', ['id' => $id]);
    })->name('show');

    // Edit Page: Matches {{ route('students.edit', id) }}
    Route::get('/{id}/edit', function ($id) {
        return view('students.edit', ['id' => $id]);
    })->name('edit');
    
    // Placeholder for Form Submission (prevents error if you try to submit)
    Route::post('/', function () {
        return "Student Created (Static Simulation)";
    })->name('store');
    
    Route::put('/{id}', function () {
        return "Student Updated (Static Simulation)";
    })->name('update');
});
