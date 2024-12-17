<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    public function run()
    {
        DB::table('files')->insert([
            [
                'project_id' => 1,
                'name' => 'project-overview.pdf',
                'url' => 'files/project-overview.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 2,
                'name' => 'app-design.png',
                'url' => 'files/app-design.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
