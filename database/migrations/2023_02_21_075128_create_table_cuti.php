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
        Schema::create('table_absen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_siswa');
            $table->date('tanggal');
            $table->string('materi');
            $table->string('durasi');
            $table->string('catatan', 500);
            $table->integer('bulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cuti');
    }
};
