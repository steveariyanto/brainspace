<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'PowerPoint',
        ]);
        Category::create([
            'name' => 'Paper',
        ]);
        Category::create([
            'name' => 'Laporan Proyek',
        ]);
        Category::create([
            'name' => 'Lainnya',
        ]);
    }
}
