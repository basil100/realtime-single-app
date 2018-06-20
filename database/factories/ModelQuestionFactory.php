<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    $title = $faker->sentences;
    $slug = str_slug($title);
    return [
        //
        'title' => $title,
        'slug' => $slug,
        'body' => $faker->text(),
        'category_id' => function() {
            return \App\Model\Category::all()->random();
        },
        'user_id' => function() {
            return \App\User::all()->random();
        },
    ];
});
