<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    // Menampilkan halaman login
    public function create()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cek kredensial login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika login berhasil, arahkan ke halaman home
            return redirect()->intended('/home'); // Mengarahkan ke halaman home setelah login
        }

        // Jika login gagal
        throw ValidationException::withMessages([
            'email' => __('auth.failed'), // Menampilkan pesan kesalahan jika login gagal
        ]);
    }

    // Menangani logout
    public function destroy(Request $request)
    {
        Auth::logout(); // Logout pengguna
        return redirect('/'); // Arahkan ke halaman utama setelah logout
    }
}

