<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Experience::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'name' => $this->faker->company,
            'position' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
