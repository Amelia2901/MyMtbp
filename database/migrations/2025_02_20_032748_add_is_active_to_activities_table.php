<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->string('ActivityPhoto');
            $table->text('ActivityPerformers');
            $table->string('ActivityTime2');
            $table->text('ActivityPlace');
            $table->boolean('is_active')->default(true); // Default aktif
        });
    }

    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
};