<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title=$this->faker->unique()->realText(55);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'introduction' => $this->faker->realText(255),
            'image' => 'articles/'.$this->faker->image('public/storage/articles/', 640, 480, null, false),
            'body' => $this->faker->text(20),
            'status' => $this->faker->boolean(),
            'id_users' => User::all()->random()->id,
            'id_categories' => Category::all()->random()->id
        ];
    }
}
