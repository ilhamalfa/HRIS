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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreignId('id_absensi');
            $table->foreign('id_absensi')->references('id')->on('absensis');
            $table->foreignId('id_bpjs');
            $table->foreign('id_bpjs')->references('id')->on('kesehatans');
            $table->integer('tunjangan_bulanan');
            $table->integer('gaji_pokok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
