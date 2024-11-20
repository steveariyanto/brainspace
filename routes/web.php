<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ContentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProjectStatusController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Rute untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rute untuk register
Route::get('/register', [AuthRegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [AuthRegisteredUserController::class, 'store']);

// // Rute untuk public
// Route::get('/', [HomeController::class, 'index'])->name('home');

// // Rute untuk CRUD Content
// Route::controller(ContentController::class)->middleware(['auth', 'verified'])->group(function() {
//     Route::get('/daftar-konten', 'index');
//     Route::get('/tambah-konten', 'create');
//     Route::post('/simpan-konten', 'store')->name('save.konten');
//     Route::get('/hapus-konten/{id}', 'delete')->name('hapus.konten');
//     Route::get('/edit-konten/{id}', 'edit')->name('edit.konten');
//     Route::post('/update-konten/{id}', 'update')->name('update.konten');
// });

// // Rute untuk profil (hanya bisa diakses setelah login)
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Rute untuk model dan controller user
Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('edit-profile');
Route::put('/profile/update', [UserController::class, 'update'])->name('update-profile');

// Rut untuk model dan controller project
Route::controller(ProjectController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/daftar-konten', 'index');
    Route::get('/tambah-konten', 'create');
    Route::post('/simpan-konten', 'store')->name('save.konten');
    Route::get('/hapus-konten/{id}', 'delete')->name('hapus.konten');
    Route::get('/edit-konten/{id}', 'edit')->name('edit.konten');
    Route::post('/update-konten/{id}', 'update')->name('update.konten');
    });

// rute untuk model dan controller notification
    Route::middleware('auth')->group(function () {
        // Menampilkan daftar notifikasi
        Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
        // Tandai notifikasi sebagai dibaca
        Route::patch('/notifications/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');
        // Hapus notifikasi
        Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');
    });

// rute untuk model dan controller projectstatus
    Route::middleware('auth')->group(function () {
        // Menampilkan daftar status proyek
        Route::get('/project-status', [ProjectStatusController::class, 'index'])->name('project-status.index');
        // Menyimpan status proyek baru
        Route::post('/project-status', [ProjectStatusController::class, 'store'])->name('project-status.store');
        // Mengupdate status proyek
        Route::put('/project-status/{id}', [ProjectStatusController::class, 'update'])->name('project-status.update');
        // Menghapus status proyek
        Route::delete('/project-status/{id}', [ProjectStatusController::class, 'destroy'])->name('project-status.destroy');
    });

// rute untuk model dan controller file
    Route::middleware('auth')->group(function () {
        // Menampilkan daftar file yang terkait dengan proyek
        Route::get('/project/{projectId}/files', [FileController::class, 'index'])->name('files.index');
        // Menyimpan file baru
        Route::post('/project/{projectId}/files', [FileController::class, 'store'])->name('files.store');
        // Menghapus file
        Route::delete('/files/{id}', [FileController::class, 'destroy'])->name('files.destroy');
    });

// rute untuk model dan controller category
    Route::middleware('auth')->group(function () {
        // Menampilkan daftar kategori
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index'); 
        // Menyimpan kategori baru
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store'); 
        // Menampilkan form untuk mengedit kategori
        Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); 
        // Mengupdate kategori
        Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');   
        // Menghapus kategori
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

Route::get('/home', function () {
    return view('home');
})->name('home_after_login');

// Sertakan rute auth.php untuk autentikasi
require __DIR__.'/auth.php';
