<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Adjust this to the path of your login view if needed
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the incoming request, only email and password are required
        $request->validate([
            'email' => 'required|email',  // Email is required
            'password' => 'required|string|min:8',  // Password is required
        ]);

        // Prepare credentials with only email and password
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user using email and password
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to intended location (dashboard)
            return redirect()->intended('dashboard'); // Adjust this to your intended path
        }

        // If authentication fails, throw validation exception with a custom message
        throw ValidationException::withMessages([
            'email' => ['The provided credentials do not match our records.'],
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect to the login page after logout
        return redirect()->route('login');
    }
}
