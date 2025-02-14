<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vision_missions', function (Blueprint $table) {
            $table->id();
            $table->text('vision');
            $table->text('mission');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vision_missions');
    }
};
