<?php

namespace Database\Factories;

use App\Models\HeroLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeroesLocation>
 */
class HeroLocationFactory extends Factory
{
    protected $model = HeroLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hero_id' => $this->faker->numberBetween(1, 10),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
        ];
    }
}
