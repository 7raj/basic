<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'parent_id' => $faker->rand(1, 5),
        'title' => $faker->words(rand(1, 5), true),
        'slug' => $faker->slug,
        'description' => $faker->paragraph(rand(1, 2), true),
        'keywords' => $faker->words(rand(2, 5), true),
    ];
});
