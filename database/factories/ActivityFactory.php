<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTime,
        'notes' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
