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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota_asal');
            $table->string('alamat');
            $table->string('nik');
            $table->enum('status', ['lajang', 'menikah','bercerai']);
            $table->integer('anak');
            $table->integer('no_telepon');
            $table->enum('role',['employee','admin','superadmin'])->default('employee');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('id_jabatan');
            $table->foreign('id_jabatan')->references('id')->on('jabatans');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
