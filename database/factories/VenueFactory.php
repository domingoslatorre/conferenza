<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Venue::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'address' => $faker->address,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});
