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
        Schema::create('pegawai_opd', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->references('id')->on('pegawai');
            $table->foreignId('opd_id')->references('id')->on('opd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai_opds');
    }
};
