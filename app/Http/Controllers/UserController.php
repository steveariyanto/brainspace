<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Tampilkan halaman utama (home).
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * Tampilkan halaman edit profil.
     */
    public function edit(Request $request): View
    {
        return view('profile.ubah-profil', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update informasi profil pengguna.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());

        // Cek apakah email berubah
        if ($user->isDirty('email')) {
            $user->email_verified_at = null; // Reset verifikasi email jika email berubah
        }

        $user->save();

        return Redirect::route('ubah-profil')->with('status', 'profile-updated');
    }
}
