<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'source_link' => $this->faker->url,
            'demo_link' => $this->faker->url,
        ];
    }
}
