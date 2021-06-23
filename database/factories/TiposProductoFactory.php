<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TiposProducto;
use Faker\Generator as Faker;

$factory->define(TiposProducto::class, function (Faker $faker) {

    return [
        'tip_descripcion' => $faker->word,
        'tip_estado' => $faker->randomDigitNotNull
    ];
});
