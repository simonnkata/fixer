<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artisan>
 */
class ArtisanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //selecting a random verification status

        $verification = $this->faker->randomElement(['verified', 'in-review', 'unverified']);
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'verification_status' => $verification,
            'rating' => rand(5, 10),
            'address_id' => Address::factory()->create()->id
        ];
    }
}