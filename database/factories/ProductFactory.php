<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'price' => $this->faker->numberBetween(0, 30),
            'stock' => $this->faker->numberBetween(20, 50),
            'short_description' => $this->faker->paragraph(),
            'long_description' => $this->faker->paragraph(2),
            'category_id' => $this->faker->numberBetween(1, 20),
            'brand_id' => $this->faker->numberBetween(1, 20),
            'thumbnail' => $this->faker->imageUrl(),
        ];
    }
}
