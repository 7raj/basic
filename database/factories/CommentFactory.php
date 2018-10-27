<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'ad_id' => function () {
            return factory(App\Ad::class)->create()->id;
        },
        'content' => $faker->paragraph(rand(1, 5), true),
        'status' => '1',
    ];
});
