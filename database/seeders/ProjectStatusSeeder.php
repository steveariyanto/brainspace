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
                'name' => 'approved',
                'updated_at' => now(),
            ],
            [
                'name' => 'pending',
                'updated_at' => now(),
            ],
            [
                'name' => 'rejected',
                'updated_at' => now(),
            ],
        ]);
    }
}
