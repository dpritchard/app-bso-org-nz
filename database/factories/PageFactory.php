<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    $n = $faker->numberBetween($min = 1, $max = 5);
    return [
        'uri' => implode('/', $faker->unique()->words($nb = $n)),
        'title' => title_case(' ', implode($faker->words())),
        'body' => $faker->paragraph(),
    ];
});
