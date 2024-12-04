<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;
use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\Category;
use App\Models\File;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Jalankan seeders lain
        $this->call([
            NotificationSeeder::class,
            FileSeeder::class,
            ProjectSeeder::class,
            ProjectStatusSeeder::class,
        ]);

        // Tambahkan data dummy langsung menggunakan model
        $categories = [
            ['categories_name' => 'PDF'],
            ['categories_name' => 'PPT'],
            ['categories_name' => 'DOCX'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $files = [
            [
                'files_name' => 'file1.pdf',
                'files_url' => '/files/file1.pdf',
                'projects_id' => 1,
            ],
            [
                'files_name' => 'file2.ppt',
                'files_url' => '/files/file2.ppt',
                'projects_id' => 2,
            ],
            [
                'files_name' => 'file3.docx',
                'files_url' => '/files/file3.docx',
                'projects_id' => 3,
            ],
        ];

        foreach ($files as $file) {
            File::create($file);
        }
    }
}
