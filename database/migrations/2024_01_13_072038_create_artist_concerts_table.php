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
        Schema::create('artist_concerts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id');
            $table->foreignId('concert_id');
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('concert_id')->references('id')->on('concerts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_concerts');
    }
};
