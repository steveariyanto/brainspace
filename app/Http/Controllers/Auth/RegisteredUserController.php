<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');  // pastikan view-nya mengarah ke register.blade.php
    }

    // Fungsi untuk menyimpan data pengguna baru
    public function store(Request $request)
    {
        // Validasi data pengguna yang dikirim dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',  // Validasi email yang unik
            'password' => 'required|string|min:8|confirmed',  // Pastikan password confirmation cocok
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),  // Hash password untuk keamanan
        ]);

        // Login pengguna yang baru dibuat
        Auth::login($user);

        // Redirect ke halaman dashboard setelah berhasil registrasi dan login
        return redirect()->route('dashboard');  // Pastikan redirect ke rute dashboard setelah login
    }
}

