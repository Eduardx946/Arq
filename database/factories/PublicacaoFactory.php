<?php

use Faker\Generator as Faker;

$factory->define(App\Publicacao::class, function (Faker $faker) {
    return [
        'texto' => $faker->realText(255),
    ];
});

?>