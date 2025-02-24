<?php

use App\Http\Controllers\StudentsController;
use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// use App\Http\Controllers\StudentsController;
// Route::get('/students', [StudentsController::class, 'index']);


// Route::get('/', function () {
//     $users = User::all();
//     return view('users', compact('users'));
// });

// Route::get('/', function () {
//     $students = Students::all();
//     return view('studentList', compact('students'));
// });

Route::get('/', [StudentsController::class, 'index'])->name('std.index');
Route::post('/create-student', [StudentsController::class, 'newStudent'])->name('std.create');