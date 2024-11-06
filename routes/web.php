<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Home route (or welcome page)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk login dengan middleware CORS
Route::middleware(['cors'])->get('/login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('login'); // Display login form
Route::middleware(['cors'])->post('/login', [AuthenticatedSessionController::class, 'login'])->name('login.post'); // Process login

// Route untuk logout dengan middleware CORS
Route::middleware(['cors'])->post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout'); // Handle logout

// Route untuk menampilkan halaman registrasi dengan middleware CORS
Route::middleware(['cors'])->get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');

// Route untuk memproses registrasi dengan middleware CORS
Route::middleware(['cors'])->post('/register', [RegisteredUserController::class, 'store'])->name('register.post');

// Route ke dashboard dengan middleware 'auth' dan 'cors'
Route::middleware(['auth', 'cors'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rute untuk profil dengan middleware 'auth' dan 'cors'
Route::middleware(['auth', 'cors'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include authentication routes
require __DIR__.'/auth.php';


