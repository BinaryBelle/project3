<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'year'=>$faker->year($max = 'now'),
    ];
});
