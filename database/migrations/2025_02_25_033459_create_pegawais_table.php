<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('nip', 18)->unique();
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->string('email');
            $table->string('telepon');
            $table->boolean('status');
            $table->text('keterangan')->nullable();
            $table->string('foto_pegawai');
            $table->string('file_sk_pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
