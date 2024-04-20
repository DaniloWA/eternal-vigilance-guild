<?php

use App\Enums\HeroStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rank_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->enum('status', array_column(HeroStatusEnum::cases(), 'value'));
            $table->integer('points');
            $table->string('description');
            $table->string('avatar_path')->nullable();  

            $table->timestamps();

            $table->foreign('rank_id')->references('id')->on('ranks');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
