<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $title = ucfirst($faker->words(4, true));
    return [
        'title' => $title,
        'text' => $faker->paragraphs(5, true),
        'slug' => str_slug($title),
        'created_at' => now(),
        'user_id' => 1,
    ];
});
