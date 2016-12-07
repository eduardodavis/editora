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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => ucfirst($faker->unique()->word),
    ];
});

$factory->define(App\Livros::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 20, $indexSize = 2),
        'subtitle' => $faker->realText($maxNbChars = 30, $indexSize = 2),
        'price' => $faker->randomFloat(2,10,800)
    ];
});