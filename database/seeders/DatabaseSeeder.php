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
            SkillSeeder::class,
            ExperienceSeeder::class,
            ProjectSeeder::class,
            EducationSeeder::class,
            SocialNetworkSeeder::class,
            LanguageSeeder::class,
            SkillStudentSeeder::class,
            SocialNetworkStudentSeeder::class,
            LanguageStudentSeeder::class,
        ]);
    }
}
