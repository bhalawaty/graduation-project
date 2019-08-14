<?php

use App\Subject;
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

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'code' => $faker->postcode,
        'units' => $faker->numberBetween(1,4),
        'department_id' => 1,
    ];
});