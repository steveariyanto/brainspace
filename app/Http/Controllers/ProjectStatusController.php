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
        $statuses = ProjectStatus::orderBy('project_status.updated_at', 'desc') // Mengurutkan berdasarkan tanggal diperbarui
            ->get();

        return view('admin.project-status.index', compact('statuses'));
    }

    /**
     * Menyimpan status proyek baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projects_id' => 'required|exists:projects,projects_id', // Pastikan project ID valid
            'project_status_name' => 'required|string|max:255',
            'project_status_updated_at' => 'required|date',
        ]);

        $status = new ProjectStatus($request->all());
        $status->save();

        return redirect()->route('project-status.index')->with('status', 'Project status created successfully.');
    }

    /**
     * Mengupdate status proyek yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'project_status_name' => 'required|string|max:255',
            'project_status_updated_at' => 'required|date',
        ]);

        $status = ProjectStatus::findOrFail($id);
        $status->update($request->all());

        return redirect()->route('project-status.index')->with('status', 'Project status updated successfully.');
    }

    /**
     * Menghapus status proyek.
     */
    public function destroy($id)
    {
        $status = ProjectStatus::findOrFail($id);
        $status->delete();

        return redirect()->route('project-status.index')->with('status', 'Project status deleted successfully.');
    }
}
