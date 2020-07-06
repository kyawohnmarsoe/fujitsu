<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\FujisuUser;
use Illuminate\Support\Str;


$factory->define(FujisuUser::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => Str::random(10),
        'email' => $faker->email,
    ];
});
