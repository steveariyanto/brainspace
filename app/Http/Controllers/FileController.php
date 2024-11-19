<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Menampilkan daftar file yang terkait dengan proyek tertentu.
     */
    public function index($projectId)
    {
        $files = File::where('projects_id', $projectId)
            ->orderBy('files_created_at', 'desc') // Mengurutkan berdasarkan tanggal dibuat
            ->get();

        return view('files.index', compact('files', 'projectId'));
    }

    /**
     * Menyimpan file baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projects_id' => 'required|exists:projects,projects_id', // Pastikan project ID valid
            'files_name' => 'required|string|max:255',
            'files_url' => 'required|url',
        ]);

        $file = new File([
            'projects_id' => $request->projects_id,
            'files_name' => $request->files_name,
            'files_url' => $request->files_url,
            'files_created_at' => now(),
        ]);

        $file->save();

        return redirect()->route('files.index', ['projectId' => $request->projects_id])
                         ->with('status', 'File uploaded successfully.');
    }

    /**
     * Menghapus file.
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();

        return redirect()->back()->with('status', 'File deleted successfully.');
    }
}
