<?php

namespace Database\Seeders;

use App\Models\Listing;
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
            'email' => 'test@test.com',
        ]);

        User::factory()->create([
            'name' => 'Test2 User',
            'email' => 'test2@test.com',
        ]);

        Listing::factory(20)->create([
            'by_user_id' => 1
        ]);
    }
}
