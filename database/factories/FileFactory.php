<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'name' => $faker->word() . '.' . $faker->fileExtension(),
        'storage_path' => 'files/' . $faker->word() . '.' . $faker->fileExtension(),
    ];
});
