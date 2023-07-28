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
        Schema::create('tbanggota', function (Blueprint $table) {
            $table->string('idanggota')->unique();
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('status');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbanggota');
    }
};
