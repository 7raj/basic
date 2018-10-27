<?php

use Faker\Generator as Faker;

$factory->define(App\Ad::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'title' => $faker->words(rand(2, 7), true),
        'slug' => $faker->slug,
        'content' => $faker->paragraph(rand(2, 7), true),
        'keywords' => $faker->words(rand(2, 7), true),
        'status' => $faker->rand(1, 3),
    ];
});
