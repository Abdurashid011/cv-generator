<?php

namespace Database\Factories;

use App\Models\HardSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HardSkill>
 */
class HardSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = HardSkill::class;

    public function definition():array
    {
        return [
            'homework' => $this->faker->randomDigit(),
            'participation' => $this->faker->randomDigit(),
        ];
    }
}
