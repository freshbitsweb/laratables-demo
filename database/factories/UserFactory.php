<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'gender' => rand(1, 2) == 1 ? 'male' : 'female',
        'country' => $faker->country,
        'active' => $faker->boolean,
    ];
});
