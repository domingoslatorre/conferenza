<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Edition::class, function (Faker $faker) {
    return [
        'event_id'   =>  function (){
            return factory(App\Models\Event::class)->create()->id;
        },
        'topic' => $faker->sentence,
        'summary' => $faker->paragraph,
        'description' => $faker->text,
        'start_date' => $faker->date,
        'end_date' => $faker->date,
        'image' => $faker->sentence
    ];
});