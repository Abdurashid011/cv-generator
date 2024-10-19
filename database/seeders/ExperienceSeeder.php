<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function (Student $student) {
            Experience::factory(2)->create([
                'student_id' => $student->id,
            ]);
        });
    }
}
