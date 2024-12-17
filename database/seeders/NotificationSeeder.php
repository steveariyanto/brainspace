<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        DB::table('notifications')->insert([
            [
                'user_id' => 1,
                'message' => 'Your project has been approved.',
                'status' => true,
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'message' => 'Your project is pending approval.',
                'status' => false,
                'created_at' => now(),
            ],
        ]);
    }
}
