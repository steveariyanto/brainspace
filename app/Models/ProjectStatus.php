<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;

    protected $table = 'project_status'; // Nama tabel
    public $timestamps = false; // Nonaktifkan timestamps jika tidak ada di tabel

    protected $fillable = [
        'name'
    ];
}
