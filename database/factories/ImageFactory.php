<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Image;
use App\User;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'user_id' => function(){
        	return User::all()->random();
        },
        'image_name' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
