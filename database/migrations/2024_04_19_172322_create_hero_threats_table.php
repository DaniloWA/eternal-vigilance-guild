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
        Schema::create('hero_threats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hero_id');
            $table->unsignedBigInteger('threat_id');
            $table->integer('points_change');  
            $table->text('description', 500)->nullable();
            $table->integer('battle_duration_seconds')->nullable(); 
            $table->dateTime('completed_at')->nullable();
            
            $table->unique(['hero_id', 'threat_id']);

            $table->timestamps();
        
            $table->foreign('threat_id')->references('id')->on('threats');
            $table->foreign('hero_id')->references('id')->on('heroes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_threats');
    }
};
