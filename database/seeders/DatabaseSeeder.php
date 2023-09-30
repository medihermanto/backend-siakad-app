<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1000)->create();

        User::create([
            'name' => 'Medi Tinambunan',
            'email' => 'meditinambunan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'roles' => 'mahasiswa'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            SubjectSeeder::class,
            ScheduleSeeder::class,
        ]);
    }
}
