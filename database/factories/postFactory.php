<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'category_id' => $this->faker->numberBetween(1, 20),
            'user_id' => $this->faker->numberBetween(1, 20),
            'description' => $this->faker->paragraph(2),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
