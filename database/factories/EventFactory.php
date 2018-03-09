<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'summary' => $faker->paragraph,
        'description' => $faker->text
    ];
});