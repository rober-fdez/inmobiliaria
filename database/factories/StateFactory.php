<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State;
use Faker\Generator as Faker;


$factory->define(State::class, function (Faker $faker) {
    return [
        'country_id' => 1,
        'name' => $this->faker->title,
        'description' => $this->faker->text,
    ];
});
