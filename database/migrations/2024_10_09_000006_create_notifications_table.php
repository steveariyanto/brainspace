// 2024_10_09_000006_create_notifications_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kunci utama
            $table->unsignedBigInteger('users_id'); // ID pengguna yang terkait
            $table->text('message'); // Pesan notifikasi
            $table->timestamps(); // Timestamp untuk created_at dan updated_at

            // Definisi kunci asing
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}