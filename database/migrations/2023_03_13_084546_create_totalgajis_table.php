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
        Schema::create('totalgajis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_gaji');
            $table->foreign('id_gaji')->references('id')->on('gajis');
            $table->integer('gaji_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('totalgajis');
    }
};
