<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Time_model::class, function (Faker\Generator $faker) {

    return [
        'timezone' => $faker->word(),
        'networktime_status' => $faker->boolean(),
        'networktime_server' => $faker->word(),
        'autotimezone' => $faker->boolean(),
        'cur_local_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'location_enabled' => $faker->boolean(),
        'automatic_time_only_enabled' => $faker->boolean(),
        'automatic_time_zone_enabled' => $faker->boolean(),
    ];
});
