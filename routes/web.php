<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use Illuminate\Support\Facades\Route;

// Rute untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rute untuk register
Route::get('/register', [AuthRegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [AuthRegisteredUserController::class, 'store']);

// Rute untuk public
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk CRUD Content
Route::controller(ContentController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/daftar-konten', 'index');
    Route::get('/tambah-konten', 'create');
    Route::post('/simpan-konten', 'store')->name('save.konten');
    Route::get('/hapus-konten/{id}', 'delete')->name('hapus.konten');
    Route::get('/edit-konten/{id}', 'edit')->name('edit.konten');
    Route::post('/update-konten/{id}', 'update')->name('update.konten');
});

// Rute untuk profil (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    return view('home');
})->name('home_after_login');

// Sertakan rute auth.php untuk autentikasi
require __DIR__.'/auth.php';
