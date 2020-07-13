<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(6),

        'content'=>$faker->realText(70),
        'author'=>User::query()->inRandomOrder()->first()->id,






    ];
});
