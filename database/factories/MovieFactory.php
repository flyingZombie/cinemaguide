<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Movie::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'mov_title' => $faker->text($maxNbChars=20),
        'mov_summary' => $faker->text($maxNbChars=100),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
