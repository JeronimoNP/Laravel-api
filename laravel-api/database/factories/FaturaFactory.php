<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fatura>
 */
class FaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amount1 = $this->faker->randomElement(['B', 'P', 'V']);

        return [
            'cliente_id' => Cliente::factory(),
            'amount' => $this->faker->numberBetween(100, 2000),
            'status' => $amount1,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $amount1 == 'P' ? $this->faker->dateTimeThisDecade() : NULL 
        ];
    }
}
