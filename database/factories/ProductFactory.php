<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'company_id' => \App\Company::all()->random()->id,
        'name'=> $faker->name(),
        'prod_desc' => $faker->text(100),
        'shipping_pay_desc' => $faker->text(100),
        'min_quantity' => 'أقل كميه للطلب واحد دسنه',
        'img_1'=>$faker->image(),
        'img_2'=>$faker->image(),
        'img_3'=>$faker->image(),
        'img_4'=>$faker->image(),
        'img_5'=>$faker->image(),
    ];
});
