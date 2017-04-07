<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/
$factory->define(App\Flexhire::class, function (Faker\Generator $faker) {

    return [
        'user_id'=>$faker->randomNumber(),
        'organisation_name'=>$faker->name,
        'organisation_size'=>$faker->numberBetween(1-500),
        'organisation_type'=>$faker->name,
        'Physical_Address'=>$faker->shuffleString(),
        'email' => $faker->unique()->safeEmail,
        'key_qualification'=>$faker->shuffleString,
        'Qualification_Description'=>$faker->text,
        'experience'=>$faker->name,
        'Responsibilities'=>$faker->text,
        'skills'=>$faker->text,
        'minSal'=>$faker->randomDigitNotNull,
        'maxSal'=>$faker->randomDigitNotNull,
        'Frequency_Rate'=>$faker->text,
        'start_date'=>$faker->dateTime,
        'end_date'=>$faker->dateTime,
    ];
});
