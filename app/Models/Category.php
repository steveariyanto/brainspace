<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Nama tabel
    protected $primaryKey = 'categories_id'; // Primary key
    public $timestamps = true; // Mengaktifkan timestamps

    protected $fillable = [
        'categories_name',
        'categories_created_at',
        'categories_updated_at',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'categories_id', 'categories_id');
    }
}
