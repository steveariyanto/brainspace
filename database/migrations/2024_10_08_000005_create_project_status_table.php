// 2024_10_09_000005_create_project_status_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectStatusTable extends Migration
{
    public function up()
    {
        Schema::create('project_status', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kunci utama
            $table->string('name'); // Status proyek
            $table->timestamps(); // Timestamp untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_status');
    }
}
