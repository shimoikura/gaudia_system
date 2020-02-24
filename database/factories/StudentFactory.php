<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->realText($faker->numberBetween(10,25)),
        'gender' => $faker->realText($faker->numberBetween(10,25)),
        'grade' => $faker->realText($faker->numberBetween(10,25)),
        'role' => $faker->realText($faker->numberBetween(10,25)),
        'id_condition' => $faker->realText($faker->numberBetween(10,25)),
        'id_class' => $faker->realText($faker->numberBetween(10,25))
    ];
});
