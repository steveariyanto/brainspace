// 2024_10_09_000004_create_files_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kunci utama
            $table->unsignedBigInteger('project_id'); // ID proyek yang terkait
            $table->string('file_path'); // Path file
            $table->timestamps(); // Timestamp untuk created_at dan updated_at

            // Definisi kunci asing
            $table->foreign('project_id')->references('projects_id')->on('projects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
