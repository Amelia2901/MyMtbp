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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('ActivityName');
            $table->string('ActivityPhoto');
            $table->text('ActivityDescription');
            $table->text('ActivityPerformers');
            $table->date('ActivityDate');
            $table->string('ActivityTime');
            $table->string('ActivityTime2');
            $table->text('ActivityPlace');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};