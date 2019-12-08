<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\equipo;
use Faker\Generator as Faker;

$factory->define(equipo::class, function (Faker $faker) {
    return [
        'id_tipo_equipo' => $faker->numberBetween(1,App\equipo::count()),
        'nombre' => $faker->name,
        'cantidad' => $faker->randomDigit,
    ];
});
