<?php

namespace Database\Factories;

use App\Models\Artisan;
use App\Models\Fixjob;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bid>
 */
class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['bid', 'accepted']);
        return [
            'timeframe' => rand(3, 10),
            'amount' => rand(500, 1000),
            'status' => $status,
            'fixjob_id' => Fixjob::factory()->create()->id,
            'artisan_id' => Artisan::factory()->create()->id
        ];
    }
}