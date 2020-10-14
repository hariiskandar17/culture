<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence,
      'slug' => \Str::slug($faker->sentence),
      'status' => 1

    ];
});
