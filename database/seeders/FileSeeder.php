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
                'file_path' => 'files/project-overview.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 2,
                'file_path' => 'files/app-design.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
