<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users,email', // Validasi email dan unik
            'password' => 'required|min:8', // Minimal 8 karakter untuk password
        ]);

        // Jika validasi gagal, kembalikan respons error
        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        // Buat user baru dan simpan ke database
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash password sebelum disimpan
        $user->save();

        // Login user yang baru terdaftar
        Auth::login($user);

        // Redirect ke halaman home setelah login
        return redirect()->route('home_after_login')->with('status', 'Registration successful');
    }
}
