<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'value' => 451.25,
            'description' => 'House decoration',
            'id_users' => 1,
            'id_articles' => 1
        ]);
        Comment::factory(10)->create();
    }
}