<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Price::class, function (Faker $faker) {
    return [
        'from' => $faker->numberBetween(1,3),
        'to' => $faker->numberBetween(4,10),
        'price' => $faker->number(50,100),
        'discount' => $faker->number(10,50),
        'product_id' => \App\Product::all()->random()->id,
    ];
});
