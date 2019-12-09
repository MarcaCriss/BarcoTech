<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\equipo;
use Faker\Generator as Faker;

$factory->define(equipo::class, function (Faker $faker) {
    return [
        'id_tipo_equipo' => rand(1,50),
        'nombre' => $faker->name,
        'cantidad' => $faker->randomDigit,
    ];
});
