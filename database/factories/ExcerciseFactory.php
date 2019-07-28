<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Exercise;
use Faker\Generator as Faker;

$factory->define(Exercise::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
