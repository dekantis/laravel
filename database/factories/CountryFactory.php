<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    $continents = [
        'Europe',
        'Asia',
        'America'
    ];
    shuffle($continents);
    $continent = array_shift($continents);
    return [
        'name' => $faker->country,
        'continent_name' => $continent,
    ];
});
