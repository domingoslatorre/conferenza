<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Room::class, function (Faker $faker) {
    return [
        'area_id'   =>  function (){
            return factory(App\Models\Area::class)->create()->id;
        },
        'name' => $faker->sentence,
        'capacity' => $faker->numberBetween($min = 40, $max = 500) 
    ];
});