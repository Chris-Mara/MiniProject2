<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array('ford', 'honda', 'toyota')),
        'model' => $faker->randomElement($array = array ('truck', 'sedan', 'van')),
        'year' => (integer)$faker->year($max = 'now'),
    ];
});
