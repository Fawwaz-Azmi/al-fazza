<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Content;
use App\Models\Package;
use App\Models\Student;
use App\Models\Teacher;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Admin::create([
            'user' => 'admin',
            'password' => bcrypt('admin')
        ]);

        Package::factory()->count(1)->create();
        Teacher::factory()->count(10)->create();
        Student::factory()->count(10)->create();
        Content::factory()->count(10)->create();
    }
}
