<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| AUTHENTICATED USERS
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Main Home Page
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/change-password', function () {
        return "CHANGE PASSWORD PAGE";
    })->name('password.change');

    // Change profile / password (already provided by Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});


/*
|--------------------------------------------------------------------------
| ADMIN ONLY
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/users', function () {
        return "Admin User Management";
    })->name('users.index');

});


/*
|--------------------------------------------------------------------------
| ADMIN + STAFF
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin,staff'])->group(function () {

    Route::get('/subjects', function () {
        return "Subject Management";
    })->name('subjects.index');

    Route::get('/programs', function () {
        return "Program Management";
    })->name('programs.index');

});