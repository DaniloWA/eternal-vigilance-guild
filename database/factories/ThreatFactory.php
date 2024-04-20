<?php

namespace Database\Factories;

use App\Models\Threat;
use App\Models\Threats;
use App\Enums\ThreatsTypeEnum;
use App\Enums\ThreatsStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Threats>
 */
class ThreatFactory extends Factory
{
    protected $model = Threat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(array_column(ThreatsTypeEnum::cases(), 'value')),
            'points' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(array_column(ThreatsStatusEnum::cases(), 'value')),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
        ];
    }

    public function typeGod(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "type" => ThreatsTypeEnum::GOD->value,
                "points" => 10
            ];
        });
    }

    public function typeDragon(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "type" => ThreatsTypeEnum::DRAGON->value,
                "points" => 8
            ];
        });
    }

    public function typeTiger(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "type" => ThreatsTypeEnum::TIGER->value,
                "points" => 5
            ];
        });
    }

    public function typeWolf(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "type" => ThreatsTypeEnum::WOLF->value,
                "points" => 3
            ];
        });
    }


}
