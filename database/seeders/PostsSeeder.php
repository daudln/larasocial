<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post_json = file_get_contents(__DIR__."/data/larasocial-posts.json");
        echo $post_json;

        $posts = json_decode($post_json, true);
        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }
    }
}
