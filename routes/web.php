<?php

use Illuminate\Support\Facades\Route;

// Home page for Student Portal
Route::get('/', function () {
    return view('home');
})->name('home');

// Student pages (static views)
Route::get('/students', function () {
    return view('students.index');
})->name('students.index');

Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id' => $id]);
})->name('students.show');

Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit', ['id' => $id]);
})->name('students.edit');
