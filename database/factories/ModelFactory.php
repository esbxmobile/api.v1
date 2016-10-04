<?php

use Api\Models\Box;
use Api\Models\User;
use Api\Models\Vehicle;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'phone' => $faker->phoneNumber,
        'phone_alt' => $faker->phoneNumber,
        'birthday' => $faker->date('dd-mm-yyyy'),
        'license' => $faker->unique()->word,
        'type_license' => $faker->randomElement(['a','b','c'])
    ];
});

$factory->define(Box::class, function (Faker\Generator $faker){
    return [
        'is_available' => $faker->randomElement([0,1]),
        'is_covered' => $faker->randomElement([0,1]),
        'is_prebook' => $faker->randomElement([0,1]),
        'is_routine' => $faker->randomElement([0,1]),
        'has_priceday' => $faker->randomElement([0,1]),
        'price_hour' => $faker->randomFloat(2,0,50),
        'price_day' => $faker->randomFloat(2,0,100),
        'price_month' => $faker->randomFloat(2,0,200),
        'price_routine' => $faker->randomFloat(2,0,500),
        'size' => $faker->randomElement(['s','m','b']),
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'street' => $faker->streetAddress,
        'district' => $faker->streetName,
        'city' => $faker->city,
        'country' => $faker->countryCode,
        'number' => $faker->buildingNumber,
        'zipcode' => $faker->postcode
    ];
});


$factory->define(Vehicle::class, function (Faker\Generator $faker){
    return array(
        'model' => $faker->word,
        'color' => $faker->safeColorName,
        'license' => $faker->unique()->word,
        'size' => $faker->randomElement(['s','m','b']),
        'type' => $faker->randomElement(['car','motorcycle'])
    );
});

