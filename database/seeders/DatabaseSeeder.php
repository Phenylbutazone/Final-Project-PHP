<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'email' => 'admin@school.local',
                'password' => 'admin123',
                'account_type' => 'admin',
            ]
        );

        Subject::updateOrCreate(
            ['code' => 'CS101'],
            ['title' => 'Introduction to Computing', 'unit' => 3]
        );

        Program::updateOrCreate(
            ['code' => 'BSIS'],
            ['title' => 'Bachelor of Science in Information Systems', 'years' => 4]
        );
    }
}
