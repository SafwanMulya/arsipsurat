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
        Schema::disableForeignKeyConstraints();

        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained();
            $table->string('judul');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('asal_surat');
            $table->text('perihal');
            $table->string('file_surat')->nullable();
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};
