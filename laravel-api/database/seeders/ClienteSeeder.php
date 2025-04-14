<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::factory()
            ->count(25)
            ->hasFaturas(10)
            ->create();

        Cliente::factory()
            ->count(100)
            ->hasFaturas(5)
            ->create();

        Cliente::factory()
            ->count(100)
            ->hasFaturas(3)
            ->create();

        Cliente::factory()
            ->count(5)
            ->create();
    }
}
