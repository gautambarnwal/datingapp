<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Chat;
use App\User;
use Faker\Generator as Faker;

$factory->define(Chat::class, function (Faker $faker) {
    return [
        'to_user_id' => function(){
        	return User::all()->random();
        },
        'from_user_id' => function(){
        	return User::all()->random();
        },
        'chat_msg' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'status' => '1'
    ];
});
