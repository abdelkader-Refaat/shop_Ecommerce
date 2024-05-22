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

         $product_name = $this->faker->unique()->words($nb =2 , $asText = true);
         $slug       = Str::title($product_name);
        return [
            'name' => Str::title($product_name),
            'slug' => $slug,
            'short_description' => $this->faker->text(),
            'description'       => $this->faker->text(500),
            'regular_price'     => $this->faker->numberBetween(1,22),
            'SKU'               => 'SMD' . $this->faker->numberBetween(100,500),
            'stock_status'      => 'inStock',
            'quantity'          => $this->faker->numberBetween(1,500),
            'image' => $this->faker->numberBetween(1,6).'.jpg',
            'category_id' => $this->faker->numberBetween(1,6),
            'brand_id' => $this->faker->numberBetween(1,6),

        ];
    }
}
