<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Radio;
use Faker\Generator as Faker;

$factory->define(Radio::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'image' => $faker->word,
        'description' => $faker->text,
        'link' => $faker->word,
        'categories_id' => $faker->word,
        'countries_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
