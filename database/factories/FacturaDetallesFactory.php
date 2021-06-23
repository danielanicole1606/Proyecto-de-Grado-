<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FacturaDetalles;
use Faker\Generator as Faker;

$factory->define(FacturaDetalles::class, function (Faker $faker) {

    return [
        'fac_id' => $faker->randomDigitNotNull,
        'pro_id' => $faker->randomDigitNotNull,
        'det_cant' => $faker->randomDigitNotNull,
        'det_valu' => $faker->randomDigitNotNull
    ];
});
