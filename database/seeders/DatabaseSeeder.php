<?php

namespace Database\Seeders;

use App\Models\Note;
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
        User::factory()->create([
            'name' => 'Test User',
            'subdomain' => 'hero',
            'email' => 'test@example.com',
        ]);

        $this->call(NotesSeeder::class);
    }
}
