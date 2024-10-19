<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Language::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'level' => $this->faker->randomElement(['beginner', 'intermediate', 'advanced']),
        ];
    }
}
