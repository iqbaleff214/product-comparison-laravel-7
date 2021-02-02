<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => rand(3,6),
        'title' => $faker->company,
        'second_title' => $faker->jobTitle,
        'features' => $faker->paragraph,
        'description' => $faker->paragraph,
        'sizing' => $faker->paragraph,
        'price' => rand(1, 150) * 100000,
    ];
});
