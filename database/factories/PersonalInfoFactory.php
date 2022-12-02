<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalInfo>
 */
class PersonalInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ic' => fake()->unique()->numberBetween(1,50),
            'mailing_address' => fake()->name(),
            'date_of_birth' => fake()->name(),
            'tel_no' => fake()->unique()->numberBetween(1,50),
            'bank_account' => fake()->unique()->numberBetween(1,50),
            'bank_name' => fake()->name(),
            'sex' => fake()->name(),
            'birthday_month' => fake()->name(),
            'facebook' => fake()->name(),
            'twitter' => fake()->name(),
            'instagram' => fake()->name(),
            'user_id' => fake()->unique()->numberBetween(1,50),
        ];
    }
}
