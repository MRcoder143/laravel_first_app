<?php

namespace Database\Seeders;
use App\Models\student;
use App\Models\user;
use App\Models\customer;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        student::factory()->count(50)->create();
        $this->call([
            // StudentSeeder::class,
            // CitySeeder::class
           CustomerSeeder::class,
           UserSeeder::class
        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
