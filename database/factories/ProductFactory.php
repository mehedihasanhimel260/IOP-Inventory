<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'cat_id' => fake()->numberBetween(1, 9),
            'brand_id' => fake()->numberBetween(1, 9),
            'name' => fake()->name(),
            'slug' => Str::slug(fake()->name()),
            'buy_price' => fake()->numberBetween(1000, 9000),
            'price' => fake()->numberBetween(1000, 9000),
            'discount_price' => fake()->numberBetween(1000, 9000),
            'qty' => fake()->numberBetween(10, 100),
            'sku' => fake()->unique()->name(),
            'short_description' => fake()->words(10, true), // 10 words
            'long_description' => fake()->words(20, true), // 20 words
            'image' => 'https://placehold.co/600x400',
        ];
    }
}
