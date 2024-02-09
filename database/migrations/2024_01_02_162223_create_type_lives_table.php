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
        Schema::create('type_lives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->foreignId('live_id');
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('live_id')->references('id')->on('lives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_lives');
    }
};
