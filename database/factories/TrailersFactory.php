<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trailers;
use Faker\Generator as Faker;

$factory->define(Trailers::class, function (Faker $faker) {

    return [
        'tra_placa' => $faker->word,
        'tra_modelo' => $faker->word,
        'tra_color' => $faker->word,
        'tra_año' => $faker->word,
        'tra_estado' => $faker->randomDigitNotNull
    ];
});
