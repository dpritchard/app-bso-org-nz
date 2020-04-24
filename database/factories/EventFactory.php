<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'start' => date('Y-m-d H:i:s'),
        'finish' => date('Y-m-d H:i:s', strtotime('+1 hour')),
        'title' => Str::title(' ', implode($faker->words())),
        'body' => $faker->paragraph(),
        'contact_id' => factory(App\Contact::class),
        'category_id' => factory(App\Category::class)
    ];
});
