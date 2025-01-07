<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Nama tabel
    public $timestamps = true; // Mengaktifkan timestamps

    protected $fillable = [
        'name'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'categories_id', 'categories_id');
    }
}
