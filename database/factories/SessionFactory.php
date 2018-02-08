<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Session::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        //'show_time' =>  $faker->dateTimeThisYear($max = 'now', $timezone = 'Australia/Sydney'),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
/*
$factory->define(App\Models\Cinema::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->company(),
        'address' => $faker->address(),
        'lat' => $faker->latitude($min = -90, $max = 90),
        'lng' => $faker->longitude($min = -180, $max = 180),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});*/
