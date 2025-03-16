<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Middleware\AuthCheck;
use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', [StudentsController::class, 'index'])->name('std.index');
Route::post('/create-student', [StudentsController::class, 'newStudent'])->name('std.create');
Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('std.delete');
Route::put('/students/{id}', [StudentsController::class, 'update'])->name('std.update');

Route::get('/', function () {
    return redirect()->route('auth.index');
});

// Auth 
Route::get('/login', [AuthController::class, 'indexLogin'])->name('auth.index');
Route::post('/user-login', [AuthController::class, 'userLogin'])->name('auth.login');

Route::get('/register', [AuthController::class, 'indexRegister'])->name('auth.register');
Route::post('/user-register', [AuthController::class, 'userRegister'])->name('auth.userRegister');

Route::middleware([AuthCheck::class])->group(function () {
    Route::get('/students', [StudentsController::class, 'index'])->name('std.index');
    Route::post('/create-student', [StudentsController::class, 'newStudent'])->name('std.create');

    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

