<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'brief' =>'the company is established since 1999',
        'address'=> $faker->address,
        'phone'=>$faker->phoneNumber,
        'email' => $faker->email
    ];
});
