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
        $name=$this->faker->name();
        return [
            'name' => $name,
            'slug_categories' => Str::slug($name),
            'image_categories' => Str::random(15),
            'is_featured' => true,
            'status_categories' => true
        ];
    }
}
