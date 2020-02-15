<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        /*
        'title' => $faker->text(50),
        'body' => $faker->text(300),
        'user_id' => $faker->integer(1),
        'cover_image' => $faker->text(50)
        */
    ];
});
