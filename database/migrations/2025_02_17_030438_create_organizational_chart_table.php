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
        Schema::create('organizational_charts', function (Blueprint $table) {
            $table->id();
            $table->string('name');            // For storing the name of the person
            $table->string('position');        // For storing the position of the person
            $table->string('photo')->nullable(); // For storing the photo file path (nullable if no photo is provided)
            $table->timestamps();             // Laravel will automatically add created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizational_charts');
    }
};
