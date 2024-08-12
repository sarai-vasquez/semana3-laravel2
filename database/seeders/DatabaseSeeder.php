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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Llamamos las clases Seeder que deseamos ejecutar
        $this->call([
            MarcasSeeder::class,
            ProductosSeeder::class,
            CategoriasSeeder::class,
            ClientesSeeder::class
        ]);
    }
}
