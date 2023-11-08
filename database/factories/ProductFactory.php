<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->randomElement(["Smart Phones", "Laptops", "Accessories"]);

        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->lastName(),
            'brand' => $this->faker->company(),
            'category' => $category,
            'price' => $this->faker->numberBetween(10000, 500000),
            'active' => true
        ];
    }
}
