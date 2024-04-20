<?php

namespace Database\Factories;

use App\Models\Hero;
use App\Enums\RanksEnum;
use App\Enums\HeroStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    protected $model = Hero::class;
    
    private string $name;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->name ?? $this->faker->name();
        return [
            "name" => $name,
            "slug" => str($name)->slug(),
            "rank_id" => $this->faker->numberBetween(1, 4),
            "points" => $this->faker->numberBetween(1, 500),
            "status" => $this->faker->randomElement(array_column(HeroStatusEnum::cases(), 'value')),
            "description" => $this->faker->text(200),
            "avatar_url" => $this->faker->imageUrl(),
        ];
    }

    public function setName(string $name): Factory {
        $this->name = $name;
        return $this;
    }

    public function unranked(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "rank_id" => null,
                "points" => 0,
            ];
        });
    }

    public function rankS(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "rank_id" => RanksEnum::S_ID->value,
                "points" => 700,
            ];
        });
    }

    public function rankA(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "rank_id" => RanksEnum::A_ID->value,
                "points" => 400,
            ];
        });
    }

    public function rankB(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "rank_id" => RanksEnum::B_ID->value,
                "points" => 200,
            ];
        });
    }

    public function rankC(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "rank_id" => RanksEnum::C_ID->value,
                "points" => 100,
            ];
        });
    }

    public function inBattle(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "status" => HeroStatusEnum::IN_BATTLE->value,
            ];
        });
    }

    public function readyForBattle(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "status" => HeroStatusEnum::READY_FOR_BATTLE->value,
            ];
        });
    }

    public function notWorking(): Factory {
        return $this->state(function (array $attributes) {
            return [
                "status" => HeroStatusEnum::NOT_WORKING->value,
            ];
        });
    }
}
