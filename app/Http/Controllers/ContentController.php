<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Project;
use App\Models\File;
use App\Models\User;

class ContentController extends Controller
{
    public function index() {
        $project = Project::with('category')->where('users_id', Auth::id())->get();
        return view('daftar-konten')->with('project',$project);
    }

    public function create() {
        // Ambil semua kategori dari tabel categories
        $categories = Category::all();
        return view('tambah-konten', compact('categories'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'proyek' => 'required',
        ]);

        // Jika validasi gagal, kembalikan respons error
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Data tidak lengkap atau tidak valid",
                'errors' => $validator->errors(),
            ]);
        }

        // Buat project baru
        $project = new Project;
        $project->users_id = $userId;
        $project->projects_title = $request->judul;
        $project->projects_description = $request->deskripsi;
        $project->categories_id = $request->kategori;
        $project->save();

        // Proses untuk menyimpan file
        if ($request->hasFile('proyek')) {
            // Simpan file yang diunggah ke direktori 'projects'
            $filePath = $request->file('proyek')->store('projects');

            // Buat file baru dan simpan dengan project_id
            $file = new File;
            $file->file_path = $filePath;
            $file->project_id = $project->projects_id; // Menyimpan ID proyek yang baru dibuat
            $file->save();
        }

        return redirect('/daftar-konten');
    }

    public function delete($id) {
        $project = Project::find($id);
        $project->delete();
        return redirect('/daftar-konten');
    }

    public function edit($id) {
        $project = Project::with('category')->where('projects_id', $id)->first();
        $categories = Category::all();
        return view('tambah-konten', compact('project', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        // Jika validasi gagal, kembalikan respons error
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => "Data tidak lengkap atau tidak valid",
                'errors' => $validator->errors(),
            ]);
        }

        // Buat project baru
        $project = Project::find($id);
        $project->projects_title = $request->judul;
        $project->projects_description = $request->deskripsi;
        $project->categories_id = $request->kategori;
        $project->save();

        return redirect('/daftar-konten');
    }
}