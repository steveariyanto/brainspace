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
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'BrainSpace Web Platform',
                'description' => 'A repository for student projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'BrainSpace Mobile App',
                'description' => 'Mobile version of the BrainSpace platform.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
