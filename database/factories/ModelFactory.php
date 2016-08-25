<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Player::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'attack' => $faker->numberBetween(0,5),
        'defense' => $faker->numberBetween(0,5),
        'stamina' => $faker->numberBetween(0,5),
    ];
});
