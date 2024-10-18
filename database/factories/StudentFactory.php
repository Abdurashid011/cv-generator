<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'nt_id' => $this->faker->unique()->randomNumber(),
            'photo' => $this->faker->imageUrl(),
            'phone' => $this->faker->phoneNumber(),
            'profession' => $this->faker->word(),
            'biography' => $this->faker->paragraph(),
        ];
    }
}
