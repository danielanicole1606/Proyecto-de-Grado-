<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {

    return [
        'emp_ruc' => $faker->word,
        'emp_razon_social' => $faker->word,
        'emp_rep_legal' => $faker->word,
        'emp_telefono' => $faker->randomDigitNotNull,
        'emp_direccion' => $faker->word,
        'emp_correo' => $faker->word
    ];
});
