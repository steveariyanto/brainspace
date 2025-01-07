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

    /**
     * Menampilkan form untuk membuat status proyek baru.
     */
    public function create()
    {
        return view('admin.project-status.tambah-project-status');
    }

    /**
     * Menyimpan status proyek baru.
     */
    public function store(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        // Menyimpan status proyek baru
        $status = new ProjectStatus();
        $status->name = $request->nama;
        $status->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('project-status.index')->with('status', 'Project status created successfully.');
    }

    /**
     * Menampilkan form untuk mengedit status proyek.
     */
    public function edit($id)
    {
        $status = ProjectStatus::findOrFail($id); // Menemukan status proyek berdasarkan ID
        return view('admin.project-status.tambah-project-status', compact('status'));
    }

    /**
     * Mengupdate status proyek yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        // Validasi input dari user
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        // Menemukan status proyek yang akan diupdate
        $status = ProjectStatus::findOrFail($id);
        $status->name = $request->nama;
        $status->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('project-status.index')->with('status', 'Project status updated successfully.');
    }

    /**
     * Menghapus status proyek.
     */
    public function destroy($id)
    {
        $status = ProjectStatus::findOrFail($id); // Menemukan status proyek berdasarkan ID
        $status->delete(); // Menghapus status proyek

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('project-status.index')->with('status', 'Project status deleted successfully.');
    }
}
