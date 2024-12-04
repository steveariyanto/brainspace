<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectStatus;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menggunakan model ProjectStatus untuk memasukkan data
        ProjectStatus::insert([
            [
                'projects_id' => 1,
                'project_status_name' => 'In Progress',
                'project_status_updated_at' => now(),
            ],
            [
                'projects_id' => 2,
                'project_status_name' => 'Completed',
                'project_status_updated_at' => now(),
            ],
            [
                'projects_id' => 3,
                'project_status_name' => 'Pending',
                'project_status_updated_at' => now(),
            ],
        ]);
    }
}
