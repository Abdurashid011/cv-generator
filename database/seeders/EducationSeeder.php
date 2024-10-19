<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Student::all()->each(function ($student) {
            Education::factory()->create([
                'student_id' => $student->id,
            ]);
        });
    }
}
