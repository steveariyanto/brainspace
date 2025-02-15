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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        $this->call([
            CategorySeeder::class,
            ProjectStatusSeeder::class,
            ProjectSeeder::class,
            FileSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}
