<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'name',
        'users_email', // Ganti dengan 'users_email'
        'users_password', // Ganti dengan 'users_password'
    ];

    protected $hidden = [
        'users_password', // Ganti dengan 'users_password'
        'remember_token',
    ];

    // Optional: jika Anda menggunakan verifikasi email
    public function getEmailForVerification(): string
    {
        return $this->users_email; // Pastikan ini sesuai
    }
}
