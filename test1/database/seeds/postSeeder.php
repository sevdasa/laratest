<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Post::class,10)->create()->each(function ($tag) {
//            $tag->posts()->save(factory(Tag::class)->make());
//        });;

        $posts = factory(Post::class, 15)->create(); // 1.
        $tags = factory(Tag::class, 10)->create(); // 2
        $posts
            ->each(function (Post $posts) use ($tags) {
                $posts->tags()->attach(
                    $tags->random(rand(1, 10))->pluck('id')->toArray() // 3.
                );
            });
    }
}
