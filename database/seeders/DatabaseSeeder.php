<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StudentSeeder::class,
            ExperienceSeeder::class,
            HardSkillSeeder::class,
            SoftSkillSeeder::class,
            LinkSeeder::class,
            LessonSeeder::class,
            ProjectSeeder::class,
            CvSeeder::class,
        ]);
    }
}
