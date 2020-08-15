<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'article_id' => 1,
        'comment' => $faker->words(4, true),
        'created_at' => now(),
        'user_id' => 1,
    ];
});
