<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menggunakan model Project untuk memasukkan data
        Project::insert([
            [
                'users_id' => 1,
                'categories_id' => 1,
                'projects_title' => 'Proyek Pengembangan Aplikasi',
                'projects_description' => 'Proyek untuk mengembangkan aplikasi berbasis web.',
                'projects_created_at' => now(),
                'projects_updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'categories_id' => 2,
                'projects_title' => 'Proyek Desain Grafis',
                'projects_description' => 'Proyek yang berfokus pada desain grafis untuk branding.',
                'projects_created_at' => now(),
                'projects_updated_at' => now(),
            ],
            [
                'users_id' => 3,
                'categories_id' => 3,
                'projects_title' => 'Proyek Riset Data',
                'projects_description' => 'Proyek riset data untuk mendukung pengambilan keputusan.',
                'projects_created_at' => now(),
                'projects_updated_at' => now(),
            ],
        ]);
    }
}
