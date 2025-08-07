<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder lain di sini.
        // Seeder ini akan memastikan data user dan buku dibuat.
        $this->call([
            BukuSeeder::class, // Ini baris yang hilang! Pastikan Anda memanggil BukuSeeder.
        ]);

        // Contoh membuat satu user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
