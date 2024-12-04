<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\File;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            [
                'projects_id' => 1,
                'files_name' => 'Dokumen Proyek 1',
                'files_url' => 'https://example.com/files/proyek1.pdf',
                'files_created_at' => now(),
                'files_updated_at' => now(),
            ],
            [
                'projects_id' => 2,
                'files_name' => 'Gambar Proyek 2',
                'files_url' => 'https://example.com/files/proyek2.png',
                'files_created_at' => now(),
                'files_updated_at' => now(),
            ],
            [
                'projects_id' => 3,
                'files_name' => 'Spreadsheet Proyek 3',
                'files_url' => 'https://example.com/files/proyek3.xlsx',
                'files_created_at' => now(),
                'files_updated_at' => now(),
            ],
        ]);
    }
}
