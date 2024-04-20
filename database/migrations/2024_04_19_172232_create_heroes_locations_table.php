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
        Schema::create('heroes_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hero_id');
            $table->bigInteger('latitude');
            $table->bigInteger('longitude');
            $table->timestamps();
            $table->foreign('hero_id')->references('id')->on('heroes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes_locations');
    }
};
