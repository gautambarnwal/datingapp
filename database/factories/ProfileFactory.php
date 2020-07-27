<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Profile;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\states;

$factory->define(Profile::class, function (Faker $faker) { 

	// $faker->addProvider(new Faker\Provider\en_US\Address($faker));
	// $faker->state; // will give you only Australian states

    return [
        'user_id' => function(){
        	return User::all()->random();
        },
        'name' => $faker->name,
        'username' => $faker->name,
        'contact' => $faker->phoneNumber,
        'gender' => $faker->randomElement($array = array ('male','female','trans')),
        'looking_for'=> $faker->randomElement($array = array ('male','female','trans')),
        'age' => $faker->numberBetween(16,60),
        'height' => $faker->randomDigit,
        'occupation' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'details' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'city' =>  $faker->randomElement($array = array ('mumbai','pune','nagpur')),
        'state' =>  $faker->randomElement($array = array ('maharashtra')),
        'country' =>  $faker->randomElement($array = array ('india')),
        'issuper' => $faker->numberBetween(0,1)
    ];
});
