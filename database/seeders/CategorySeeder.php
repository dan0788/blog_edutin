<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Horror',
            'slug_categories' => 'Random',
            'image_categories' => 'https://www.65ymas.com/uploads/s1/76/67/78/foto_1_621x621.jpeg',
            'is_featured' => true,
            'status_categories' => true
        ]);
        Category::factory(10)->create();
    }
}