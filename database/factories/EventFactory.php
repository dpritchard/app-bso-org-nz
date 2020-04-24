<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'start' => date('Y-m-d H:i:s'),
        'finish' => date('Y-m-d H:i:s', strtotime('+1 hour')),
        'title' => title_case(' ', implode($faker->words())),
        'body' => $faker->paragraph(),
    ];
});
