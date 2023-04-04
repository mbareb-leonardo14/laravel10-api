<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use App\Models\Post;
use App\Models\User;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
    {
    /**
     * Seed the application's database.
     */
    public function run(): void
        {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Mbarep Leonardo'
        // ]);

        User::factory(20)->create();

        Phone::factory(20)->create();
        }


    }
