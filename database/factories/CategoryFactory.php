<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->name();
        return [
            'name' => $name,
            'slug_categories' => Str::slug($name),
            'image_categories' => 'categories/'.$this->faker->image('public/storage/categories', 400, 400, null, false),
            'is_featured' => $this->faker->boolean(),
            'status_categories' => $this->faker->boolean()
        ];
    }
}
