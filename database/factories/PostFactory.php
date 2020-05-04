<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' =>  $faker->name,
        'body' => $faker->paragraph,
        'published_at' => now()->subDays(random_int(0, 30)),
    ];
});
