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
        Schema::create('calonpegawais', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('tanggalLahir');
            $table->string('alamat');
            $table->text('skills');
            $table->enum('status', ['single', 'menikah']);
            $table->enum('kelamin', ['L', 'P']);
            $table->string('noHp');
            $table->string('fotoDiri');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calonpegawais');
    }
};
