<?php

namespace Database\Seeders;

use App\Models\Propiedad;
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
        Propiedad::factory(10)->create();

        User::factory()->create([
            'name' => 'Mauro',
            'email' => 'mauro@gmail.com',
            'password' => bcrypt('mauro123'),
        ]);

    }
}
