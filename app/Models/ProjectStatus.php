<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;

    protected $table = 'project_status'; // Nama tabel
    protected $primaryKey = 'project_status_id'; // Primary key
    public $timestamps = false; // Nonaktifkan timestamps jika tidak ada di tabel

    protected $fillable = [
        'projects_id',
        'project_status_name',
        'project_status_updated_at',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id', 'projects_id');
    }
}
