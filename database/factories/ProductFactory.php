<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_category_id' => function () {
            return factory(App\ProductCategory::class)->create()->id;
        },
        'name' => $faker->name,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
