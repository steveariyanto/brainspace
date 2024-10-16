<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications'; // Nama tabel
    protected $primaryKey = 'notifications_id'; // Primary key
    public $timestamps = true; // Mengaktifkan timestamps

    protected $fillable = [
        'users_id',
        'notifications_message',
        'notifications_status',
        'notifications_created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}
