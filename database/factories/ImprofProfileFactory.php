<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImprofProfile>
 */
class ImprofProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake()->firstname(),
            'lastname' => fake()->lastname(),
            'ppi' => fake()->lastname(),
            'batch' => fake()->lastname(),
            'user_id' => fake()->unique()->numberBetween(1,50),
        ];
    }
}
