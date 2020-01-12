<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'estimated-price' => $faker->randomElement(['400', ',7000', '4800', '3450'])
    ];
});
