<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'users_id' => 2,
                'categories_id' => 1,
                'projects_title' => 'BrainSpace Web Platform',
                'projects_description' => 'A repository for student projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'categories_id' => 2,
                'projects_title' => 'BrainSpace Mobile App',
                'projects_description' => 'Mobile version of the BrainSpace platform.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
