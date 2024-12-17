<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_status')->insert([
            [
                'project_id' => 1,
                'name' => 'approved',
                'updated_at' => now(),
            ],
            [
                'project_id' => 2,
                'name' => 'pending',
                'updated_at' => now(),
            ],
        ]);
    }
}
