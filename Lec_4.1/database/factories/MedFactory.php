<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\med>
 */
class MedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(random_int(1,3)),
            'unitsPerPacket' => random_int(1,4),
            'amount' => random_int(70, 500),
            'sellingPricePerUnit' => random_int(0.1, 100),
        ];
    }
}
