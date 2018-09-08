<?php

use Faker\Generator as Faker;

$factory->define(App\ProductCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
