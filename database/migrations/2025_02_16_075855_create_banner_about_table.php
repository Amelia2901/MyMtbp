<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('banner_about', function (Blueprint $table) {
            $table->id();
            $table->string('banner_photo');
            $table->string('banner_title');
            $table->text('banner_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banner_about');
    }
};
