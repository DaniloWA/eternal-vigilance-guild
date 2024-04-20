<?php

use App\Enums\ThreatsStatusEnum;
use App\Enums\ThreatsTypeEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('threats', function (Blueprint $table) {
            $table->id();
            $table->enum('type', array_column(ThreatsTypeEnum::cases(), 'value'));
            $table->enum('status', array_column(ThreatsStatusEnum::cases(), 'value'))->default(ThreatsStatusEnum::ACTIVE->value);
            $table->integer('points')->default(3);
            $table->bigInteger('latitude');
            $table->bigInteger('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threats');
    }
};
