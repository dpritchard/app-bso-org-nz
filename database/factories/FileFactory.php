<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
    return [
        'name' => $faker->word() . '.' . $faker->fileExtension(),
        'storage_path' => 'files/' . $faker->word() . '.' . $faker->fileExtension(),
    ];
});
