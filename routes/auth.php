<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Login Routes
Route::get('/login', [AuthenticatedSessionController::class, 'showLoginForm'])
    ->middleware('guest')  // Ensure only guests can access the login form
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'login'])
    ->middleware('guest')  // Ensure guests can post login credentials
    ->name('login.post');

// Logout Route
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')  // Ensure only logged-in users can log out
    ->name('logout');

// Registration Routes (if applicable)
Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register.post');

// Password Reset Routes (built-in Laravel routes)
Route::get('/forgot-password', function () {
    return view('auth.forgot-password'); // or use a controller if needed
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [\App\Http\Controllers\Auth\NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [\App\Http\Controllers\Auth\NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');
