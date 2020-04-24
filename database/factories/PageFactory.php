<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Page::class, function (Faker $faker) {
	$n = $faker->numberBetween($min = 1, $max = 5);
    return [
        'uri' => implode('/', $faker->unique()->words($nb = $n)),
        'title' => Str::title(' ', implode($faker->words())),
        'body' => $faker->paragraph(),
    ];
});
