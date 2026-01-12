<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductSeederFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              
            'name' => Str::random(10),
            'detalis' => Str::random(50).'@example.com',
            'sku' => Str::random(10),
            'stock' => rand(1,20),
            'price' => rand(20.00, 5000.00),
            'image' => 'product_photo/nophoto.jpg',
            'category_id' => rand(1,4)

        
        ];
    }
}
