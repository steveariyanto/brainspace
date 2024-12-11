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
        return view('tambah-category');
    }

    /**
     * Menyimpan kategori baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categories_name' => 'required|string|in:PowerPoint,Paper,Laporan Proyek,Lainnya',
        ]);

        $category = new Category([
            'categories_name' => $request->categories_name,
            'categories_created_at' => now(),
            'categories_updated_at' => now(),
        ]);

        $category->save();

        return redirect()->route('categories.index')
                         ->with('status', 'Category created successfully.');
    }

    /**
     * Menampilkan form untuk mengedit kategori.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Menemukan kategori berdasarkan ID

        $categories_options = ['PowerPoint', 'Paper', 'Laporan Proyek', 'Lainnya'];

        return view('categories.edit', compact('category', 'categories_options'));
    }

    /**
     * Mengupdate kategori.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categories_name' => 'required|string|in:PowerPoint,Paper,Laporan Proyek,Lainnya',
        ]);

        $category = Category::findOrFail($id);
        $category->categories_name = $request->categories_name;
        $category->categories_updated_at = now();

        $category->save();

        return redirect()->route('categories.index')
                         ->with('status', 'Category updated successfully.');
    }

    /**
     * Menghapus kategori.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('status', 'Category deleted successfully.');
    }
}
