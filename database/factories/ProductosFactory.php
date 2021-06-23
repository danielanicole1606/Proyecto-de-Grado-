<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {

    return [
        'tip_id' => $faker->randomDigitNotNull,
        'pro_descripcion' => $faker->word,
        'pro_observaciones' => $faker->word
    ];
});
