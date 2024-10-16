// 2024_10_09_000002_create_categories_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kunci utama
            $table->string('name'); // Nama kategori
            $table->timestamps(); // Timestamp untuk created_at dan updated_at
        });

    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
