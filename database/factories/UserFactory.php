<?php

use App\Subject;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [

//        'id' => $faker->name->Null(),
        'c_id' => $faker->unique()->randomNumber(8),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Subject::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'code' => $faker->postcode,
        'units' => $faker->numberBetween(1,4)
    ];
});

$factory->define(App\Doctor::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
    ];
});

$factory->define(App\TeachingAssistant::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
    ];
});
