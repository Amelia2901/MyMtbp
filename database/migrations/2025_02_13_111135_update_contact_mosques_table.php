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
        Schema::table('contact_mosques', function (Blueprint $table) {
            $table->id();
            $table->renameColumn('title_contact', 'youtube_channel');
            $table->string('url_youtube');
            $table->renameColumn('subtitle_contact', 'address_mosque'); 
        });
    }
    
    public function down(): void
    {
        Schema::table('contact_mosques', function (Blueprint $table) {
            $table->dropColumn('contact_id');
        });
    }
};