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
        Schema::create('pengalamen', function (Blueprint $table) {
            $table->id();
            $table->string('lamaPengalaman');
            $table->string('namaLembaga');
            $table->date('posisi');
            $table->date('jobDescription');
            $table->foreignId('calonPegawai_id')->constrained('users');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalamen');
    }
};
