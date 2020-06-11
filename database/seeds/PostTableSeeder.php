<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Comment;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("posts")->insert([
        //     "title" => Str::random(20),
        //     "body" => Str::random(200) 
        // ]);

        // $post = Post::create([
        //     "title" => Str::random(20),
        //     "body" => Str::random(200)
        // ]);

        factory(Post::class, 10)->create()->each(function($post) {
            $post->comments()->save(factory(Comment::class)->make());
        });
    }
}
