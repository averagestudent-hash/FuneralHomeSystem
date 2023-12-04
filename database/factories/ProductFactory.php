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
        $categories = [
            'Burial Merchandise',
            'Caskets',
            'Burial Vaults',
            'Cremation Merchandise',
            'Urns',
            'Urn Vault',
        ];
    
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category' => $this->faker->randomElement($categories),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
