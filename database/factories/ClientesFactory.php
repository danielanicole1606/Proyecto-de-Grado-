<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Clientes;
use Faker\Generator as Faker;

$factory->define(Clientes::class, function (Faker $faker) {

    return [
        'cli_ced_ruc' => $faker->word,
        'cli_nom_rasocial' => $faker->word,
        'cli_direccion' => $faker->word,
        'cli_telefono' => $faker->word,
        'cli_correo' => $faker->word,
        'cli_estado' => $faker->randomDigitNotNull
    ];
});
