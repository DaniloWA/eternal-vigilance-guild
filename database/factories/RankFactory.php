<?php

namespace Database\Factories;

use App\Models\Rank;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ranks>
 */
class RankFactory extends Factory
{
    protected $model = Rank::class;

    private $title;
    private $maxPoints;

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setMaxPoints($maxPoints)
    {
        $this->maxPoints = $maxPoints;
        return $this;
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->title ?? $this->faker->title(),
            'max_points' => $this->maxPoints ?? $this->faker->numberBetween(1, 500),
        ];
    }


}
