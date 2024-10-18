<?php

namespace Database\Factories;

use App\Models\Cv;
use App\Models\Experience;
use App\Models\HardSkill;
use App\Models\Lesson;
use App\Models\Project;
use App\Models\SoftSkill;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cv>
 */
class CVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cv::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'lesson_id' => Lesson::factory(),
            'hard_skill_id' => HardSkill::factory(),
            'soft_skill_id' => SoftSkill::factory(),
            'project_id' => Project::factory(),
            'experience_id' => Experience::factory(),
        ];
    }
}
