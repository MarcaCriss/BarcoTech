<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tipoequipo;
use Faker\Generator as Faker;

$factory->define(tipoequipo::class, function (Faker $faker) {
    return [
        'dueño' => $faker->name,
    ];
});
