<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID
            $table->unsignedBigInteger('user_id')->nullable(); // Relasi ke tabel users
            $table->string('ip_address', 45)->nullable(); // IP address user (IPv6 support)
            $table->text('user_agent')->nullable(); // Informasi browser, device, dll.
            $table->text('payload'); // Data serialized untuk session
            $table->integer('last_activity')->unsigned(); // Timestamp dari aktivitas terakhir
            $table->timestamp('created_at')->nullable(); // Waktu session dibuat
            $table->timestamp('updated_at')->nullable(); // Waktu session terakhir diperbarui

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
