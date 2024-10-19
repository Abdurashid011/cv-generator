<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function (Student $student) {
            Project::factory()->create([
                'student_id' => $student->id,
            ]);
        });
    }
}
