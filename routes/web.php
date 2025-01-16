<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectStatusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectApprovalController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use Illuminate\Support\Facades\Route;

// Rute untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

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

Route::controller(NotificationController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/notifikasi', 'index')->name('notifikasi');
});

// Rute untuk profil (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route untuk ke halaman home
    Route::get("/dashboard", [DashboardController::class, "index"])->name('dashboard');

    //Route untuk ke halaman project approval
    Route::get("/project-approval", [ProjectApprovalController::class, "index"])->name('project_approval');
    Route::get("/project-approval/approve/{id}", [ProjectApprovalController::class, "approve"])->name('project_approval.approve');
    Route::get("/project-approval/reject/{id}", [ProjectApprovalController::class, "reject"])->name('project_approval.reject');

    //Route untuk ke halaman project status
    Route::get("/project-status", [ProjectStatusController::class, "index"])->name('project-status.index');

    //Route untuk ke halaman category
    Route::get("/category", [CategoryController::class, "index"])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/save', [CategoryController::class, 'store'])->name('category.save');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.detail');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/hapus/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

// Sertakan rute auth.php untuk autentikasi
require __DIR__.'/auth.php';
