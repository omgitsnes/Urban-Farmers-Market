<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {

    $faker->addProvider(new Faker\Provider\en_US\Person($faker));
    $faker->addProvider(new Faker\Provider\en_US\Address($faker));
    $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
    $faker->addProvider(new Faker\Provider\en_US\Company($faker));
    $faker->addProvider(new Faker\Provider\Lorem($faker));
    $faker->addProvider(new Faker\Provider\Internet($faker));
    $faker->addProvider(new Faker\Provider\Image($faker));

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'location' => $faker->city,
        'presentation' => $faker->paragraph(3, true),
        'blocked' => rand(0, 9) == 0 ? 1 : 0,
        'sells_evals' => rand(1, 5),
        'sells_count' => rand(0, 1000),
        'buys_evals' => rand(1, 5),
        'buys_count' => rand(0, 1000),
        'profile_photo' => $faker->imageUrl(640, 480),
    ];
});

$factory->define(App\Advertisement::class, function (Faker\Generator $faker) {

    $faker->addProvider(new Faker\Provider\en_US\Person($faker));
    $faker->addProvider(new Faker\Provider\en_US\Address($faker));
    $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
    $faker->addProvider(new Faker\Provider\en_US\Company($faker));
    $faker->addProvider(new Faker\Provider\Lorem($faker));
    $faker->addProvider(new Faker\Provider\Internet($faker));

    return [
        'owner_id',
        'name',
        'description',
        'price_cents',
        'trade_prefs',
        'quantity',
        'blocked',
    ];
});
