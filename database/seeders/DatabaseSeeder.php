<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* eliminar carpeta articles y categories */
        Storage::deleteDirectory('articles');
        Storage::deleteDirectory('categories');

        /* crear carpeta articles y categories */
        Storage::createDirectory('articles');
        Storage::createDirectory('categories');

        /* llamar al seeder */
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ArticleSeeder::class);        
        $this->call(CommentSeeder::class);
        
        /* llamar a factories */
        /* Article::factory(20)->create(); */
    }
}
