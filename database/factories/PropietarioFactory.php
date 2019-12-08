<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\propietario;
use Faker\Generator as Faker;

$factory->define(propietario::class, function (Faker $faker) {
    return [        
        'nombre' => $faker->name,
        'valor_bote' => $faker->randomDigit,
        'tamaño' => $faker->randomDigit,
        'telefono' => $faker->phoneNumber,
    ];
});
