<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lokasi;
use Faker\Generator as Faker;

$factory->define(Lokasi::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence,
      'alamat' => $faker->sentence,
      'latitude' => 1,
      'longitude' => 1,
      'deskripsi' => $faker->sentence,
      'gambar' => $faker->sentence,
    ];
});
