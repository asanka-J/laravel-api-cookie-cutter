<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\People::class, function (Faker $faker) {
    return [
        'firstName'=> $faker->firstName,
        'lastName'=> $faker->lastName,
        'phone'=> $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'city'=> $faker->city,
    ];
});
