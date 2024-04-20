<?php

namespace Database\Factories;

use App\Models\Hero;
use App\Models\Threat;
use App\Models\HeroThreats;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hero_threats>
 */
class HeroThreatsFactory extends Factory
{
    protected $model = HeroThreats::class;

    protected static $number = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $number = self::$number++;

        return [
            'hero_id' => $number,
            'threat_id' => $number,
            'points_change' => $this->faker->numberBetween(-3, 10),
            'description' => $this->faker->text(200),
            'battle_duration_seconds' => $this->faker->numberBetween(1,  600),
            'completed_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
