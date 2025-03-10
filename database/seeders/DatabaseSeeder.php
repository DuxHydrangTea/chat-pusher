<?php

namespace Database\Seeders;

use App\Models\Message;
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
            'name' => 'Ngoc Dung',
            'email' => 'te12312t@example.com',
        ]);
        User::factory()->create([
            'name' => 'Ngoc D1ng',
            'email' => 'tesasdsadat@example.com',
        ]);
        User::factory()->create([
            'name' => 'Ngoc Dun3g',
            'email' => 'tes1t@example.com',
        ]);
        Message::factory(5)->create([
            'user_id' => 1,
            'receiver_id' => 3,
            'message' => 'Hello, how are you?',
        ]);
        Message::factory(5)->create([
            'user_id' => 3,
            'receiver_id' => 1,
            'message' => 'IDK?',
        ]);
    }
}
