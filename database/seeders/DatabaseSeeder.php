<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\File;
use App\Models\Notification;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Buat pengguna
        $users = User::factory(10)->create(); // Membuat 10 pengguna

        // Buat kategori
        $categories = Category::factory(5)->create(); // Membuat 5 kategori

        // Buat status proyek
        $projectStatuses = ProjectStatus::factory(3)->create(); // Membuat 3 status proyek

        // Buat proyek dan relasikannya dengan pengguna dan kategori
        foreach ($users as $user) {
            $projects = Project::factory(2)->create([
                'users_id' => $user->users_id, // Mengaitkan proyek dengan pengguna
                'category_id' => $categories->random()->category_id, // Mengaitkan proyek dengan kategori acak
                'project_status_id' => $projectStatuses->random()->project_status_id, // Mengaitkan proyek dengan status acak
            ]);

            // Buat file untuk setiap proyek
            foreach ($projects as $project) {
                File::factory(3)->create([
                    'project_id' => $project->project_id, // Mengaitkan file dengan proyek
                ]);
            }

            // Buat notifikasi untuk setiap pengguna
            Notification::factory(2)->create([
                'users_id' => $user->users_id, // Mengaitkan notifikasi dengan pengguna
            ]);
        }
    }
}
