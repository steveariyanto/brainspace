<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Pastikan file view 'auth.login' ada
    }

    public function store(Request $request)
    {
        $request->validate([
            'users_email' => 'required|email',
            'users_password' => 'required',
        ]);

        if (Auth::attempt([
            'users_email' => $request->input('users_email'),
            'password' => $request->input('users_password')
        ])) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'users_email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
