<?php

use Faker\Generator as Faker;

$factory->define(App\Foto::class, function (Faker $faker) {
    return [
        'descricao' => $faker->realText(255),
    ];
});

?>