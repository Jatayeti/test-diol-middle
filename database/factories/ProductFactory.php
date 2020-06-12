<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name($gender = null),
        'des' => $faker->paragraph(5),
        'image' => $faker->imageUrl(800, 800, 'cats'),
        'price' => rand(1000, 9999),
        'in_stock' => [1,1,1,0][array_rand([1,1,1,0], 1)],
    ];
});
