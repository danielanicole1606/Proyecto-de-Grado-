<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Facturas;
use Faker\Generator as Faker;

$factory->define(Facturas::class, function (Faker $faker) {

    return [
        'emp_id' => $faker->randomDigitNotNull,
        'cli_id' => $faker->randomDigitNotNull,
        'cg_id' => $faker->randomDigitNotNull,
        'fac_numero' => $faker->word,
        'fac_fecha' => $faker->word,
        'fac_iva' => $faker->randomDigitNotNull,
        'fac_descuento' => $faker->randomDigitNotNull
    ];
});
