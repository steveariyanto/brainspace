<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects'; // Nama tabel
    protected $primaryKey = 'projects_id'; // Primary key
    public $timestamps = true; // Mengaktifkan timestamps

    protected $fillable = [
        'users_id',
        'categories_id',
        'project_status_id',
        'projects_title',
        'projects_description',
        'projects_created_at',
        'projects_updated_at',
    ];

    protected $appends = [
        'project_link'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    public function file()
    {
        return $this->hasOne(File::class, 'project_id', "projects_id");
    }

    public function projectStatus()
    {
        return $this->hasOne(ProjectStatus::class, 'id', 'project_status_id');
    }

    public function getProjectLinkAttribute() {
        return $this->file?->file_path;
    }
}
