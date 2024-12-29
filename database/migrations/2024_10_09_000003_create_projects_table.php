// 2024_10_09_000003_create_projects_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('projects_id'); // Kunci utama
            $table->unsignedBigInteger('users_id'); // ID pengguna yang terkait
            $table->unsignedBigInteger('categories_id'); // ID kategori yang terkait
            $table->string('projects_title', 200); // Judul proyek
            $table->text('projects_description'); // Deskripsi proyek
            $table->tinyInteger("is_approved")->default(0); //
            $table->timestamps(); // Timestamp untuk created_at dan updated_at

            // Definisi kunci asing
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
