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
        Schema::create('table_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_siswa',50);
            $table->string('ttl_siswa',50);
            $table->string('nama_ortu',50);
            $table->string('nama_sekolah',50);
            $table->integer('kelas');
            $table->string('alamat');
            $table->string('no_telp',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_karyawan');
    }
};
