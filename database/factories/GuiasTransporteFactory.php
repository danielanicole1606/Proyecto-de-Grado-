<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GuiasTransporte;
use Faker\Generator as Faker;

$factory->define(GuiasTransporte::class, function (Faker $faker) {

    return [
        'cli_id' => $faker->randomDigitNotNull,
        'per_id' => $faker->randomDigitNotNull,
        'chofer_id' => $faker->randomDigitNotNull,
        'tra_id' => $faker->randomDigitNotNull,
        'tip_id' => $faker->randomDigitNotNull,
        'cg_fecha' => $faker->word,
        'cg_numero_guia' => $faker->word,
        'cg_origen' => $faker->word,
        'cg_destino' => $faker->word,
        'cg_observaciones' => $faker->word,
        'cg_estado' => $faker->randomDigitNotNull
    ];
});
