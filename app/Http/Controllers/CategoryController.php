<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar kategori.
     */
    public function index()
    {
        // if(auth()->user()->role != "admin") return redirect("/");
        $categories = Category::all(); // Mengambil semua kategori

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        // Return view untuk tambah kategori
        return view('admin.category.tambah-category');
    }

    /**
     * Menyimpan kategori baru.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string',
        ]);

        $category = Category::create([
            'name' => $request->nama,
        ]);

        return redirect()->route('category.index')->with('status', 'Category created successfully.');
    }

    /**
     * Menampilkan form untuk mengedit kategori.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Menemukan kategori berdasarkan ID

        return view('admin.category.tambah-category', compact('category'));
    }

    /**
     * Mengupdate kategori.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->nama;
        $category->save();

        return redirect()->route('category.index')->with('status', 'Category updated successfully.');
    }

    /**
     * Menghapus kategori.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('status', 'Category deleted successfully.');
    }
}
