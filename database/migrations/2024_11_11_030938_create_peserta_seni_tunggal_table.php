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
        Schema::create('senitunggal', function (Blueprint $table) {
            $table->id();
            $table->string('namaPeserta')->nullable();
            $table->date('tglLahirPeserta')->nullable();
            $table->string('namaOfficial')->nullable();
            $table->string('noTelpon', 20)->nullable();
            $table->string('instansi')->nullable();
            $table->string('kategori', 50)->nullable();
            $table->string('buktiPembayaran')->nullable();
            $table->string('status', 50)->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_seni_tunggal');
    }
};
