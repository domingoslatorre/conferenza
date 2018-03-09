<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Area::class, function (Faker $faker) {
    return [
        'venue_id'   =>  function (){
            return factory(App\Models\Venue::class)->create()->id;
        },
        'name' => $faker->sentence
    ];
});