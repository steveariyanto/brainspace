<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files'; // Nama tabel
    protected $primaryKey = 'files_id'; // Primary key
    public $timestamps = true; // Mengaktifkan timestamps

    protected $fillable = [
        'projects_id',
        'files_name',
        'files_url',
        'files_created_at',
        'files_updated_at',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id', 'projects_id');
    }
}
