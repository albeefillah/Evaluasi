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
        Schema::create('eval-wi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->references('id')->on('users');
            $table->string('ket_pengajar',100);
            $table->string('nama_pelatihan')->nullable();
            $table->integer('penguasaan_materi')->nullable();
            $table->integer('cara_jawab_pertanyaan')->nullable();
            $table->integer('sistematika_penyajian')->nullable();
            $table->integer('menyajikan_materi')->nullable();
            $table->integer('metode_sarana_pemb')->nullable();
            $table->integer('kualitas_bahan_tayang')->nullable();
            $table->integer('pemberian_motivasi')->nullable();
            $table->integer('ketepatan_waktu_materi')->nullable();
            $table->integer('penggunaan_bahasa')->nullable();
            $table->date('bulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eval-wi');
    }
};
