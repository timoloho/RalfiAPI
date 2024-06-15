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
        Schema::create('Disc', function (Blueprint $table) {
            $table->id();
            $table->text('image_url');
            $table->string('title');
            $table->text('description');
            $table->string('speed');
            $table->string('glide');
            $table->string('turn');
            $table->string('fade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc');
    }
};
