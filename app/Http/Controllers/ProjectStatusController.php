<?php

namespace App\Http\Controllers;

use App\Models\ProjectStatus;
use Illuminate\Http\Request;

class ProjectStatusController extends Controller
{
    /**
     * Menampilkan daftar status proyek.
     */
    public function index()
    {
        $statuses = ProjectStatus::orderBy('updated_at', 'desc') // Mengurutkan berdasarkan tanggal diperbarui
            ->get();

        return view('admin.project-status.index', compact('statuses'));
    }
}
