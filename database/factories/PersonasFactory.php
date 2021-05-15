<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Personas;
use Faker\Generator as Faker;

$factory->define(Personas::class, function (Faker $faker) {

    return [
        'per_id' => $faker->randomDigitNotNull,
        'per_apellidos' => $faker->word,
        'per_nombre' => $faker->word,
        'per_telefono' => $faker->word,
        'per_direccion' => $faker->word,
        'per_correo' => $faker->word,
        'per_tipo' => $faker->randomDigitNotNull,
        'per_estado' => $faker->randomDigitNotNull
    ];
});
