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
        Schema::create('categori_infaqs', function (Blueprint $table) {
            $table->id();
            $table->text('kategori_1');
            $table->text('deskripsi_1');
            $table->text('kategori_2');
            $table->text('deskripsi_2');
            $table->text('kategori_3');
            $table->text('deskripsi_3');
            $table->text('kategori_4');
            $table->text('deskripsi_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categori_infaqs');
    }
};
