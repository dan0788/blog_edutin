<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Saw',
            'slug' => 'Random',
            'introduction' => 'Horror movie',
            'image' => 'https://www.65ymas.com/uploads/s1/76/67/78/foto_1_621x621.jpeg',
            'body' => 'La película del año',
            'status' => true,
            'id_users' => 1,
            'id_categories' => 1
        ]);
        Article::factory(10)->create();
    }
}