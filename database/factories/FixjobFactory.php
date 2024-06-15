<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class FixjobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->randomElement(['plumbing', 'electrical', 'carpentry', 'paintwork', 'HVAC', 'roofing', 'masonry', 'landscaping', 'general', 'flooring', 'appliance', 'pestcontrol']);
        $status = $this->faker->randomElement(['available', 'in-progress', 'completed']);
        $customer = Customer::factory()->create();
        return [
            'category' => $category,
            'description' => $this->faker->sentence(),
            'status' => $status,
            'customer_id' => $customer->id,
            'address_id' => $customer->address()->first()->id
        ];
    }
}