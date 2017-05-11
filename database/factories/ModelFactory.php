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

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    static $password;
//
//    return [
//        'first_name' => $faker->name,
//        'last_name' => $faker->name,
//        'phone_number' => $faker->phoneNumber,
//
//        'email' => $faker->unique()->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
//});
$factory->define(App\Flexhire::class, function (Faker\Generator $faker) {

    return [
        'user_id'=>\App\User::all()->random()->id,
        'organisation_name'=>$faker->name,
        'organisation_size'=>$faker->numberBetween(1-500),
        'organisation_type'=>$faker->text(50),
        'Physical_Address'=>$faker->city,
        'email' => $faker->unique()->safeEmail,
        'key_qualification'=>$faker->text(100),
        'Qualification_Description'=>$faker->paragraph(10),
        'experience'=>$faker->text(10),
        'Responsibilities'=>$faker->paragraph(150),
        'skills'=>$faker->paragraph(10),
        'minSal'=>$faker->numberBetween(10000-100000),
        'maxSal'=>$faker->numberBetween(101000-1000000),
        'Frequency_Rate'=>$faker->text(10),
        'start_date'=>$faker->dateTimeThisYear,
        'end_date'=>$faker->dateTimeThisYear,
    ];
});
$factory->define(App\Hire::class, function (Faker\Generator $faker) {

    return [
        'user_id'=>\App\User::all()->random()->id,
        'organisation_name'=>$faker->name,
        'organisation_size'=>$faker->numberBetween(1-500),
        'organisation_type'=>$faker->text(50),
        'Physical_Address'=>$faker->city,
        'email' => $faker->unique()->safeEmail,
        'key_qualification'=>$faker->text(10),
        'Qualification_Description'=>$faker->paragraph(10),
        'experience'=>$faker->numberBetween(2-25).'years',
        'Responsibilities'=>$faker->paragraph(150),
        'skills'=>$faker->paragraph(10),
        'minSal'=>$faker->numberBetween(10000-100000),
        'maxSal'=>$faker->numberBetween(101000-1000000),
        'start_date'=>$faker->dateTimeThisYear,
    ];
});

//$factory->define(App\Post::class, function (Faker\Generator $faker) {
//
//    return [
//        'user_id'=>\App\User::all()->random()->id,
//        'organisation_name'=>$faker->name,
//        'organisation_size'=>$faker->numberBetween(1-500),
//        'organisation_type'=>$faker->text(50),
//        'Physical_Address'=>$faker->city,
//        'email' => $faker->unique()->safeEmail,
//        'key_qualification'=>$faker->text(10),
//        'Qualification_Description'=>$faker->paragraph(10),
//        'experience'=>$faker->numberBetween(2-25).'years',
//        'Responsibilities'=>$faker->paragraph(150),
//        'skills'=>$faker->paragraph(10),
//        'minSal'=>$faker->numberBetween(10000-100000),
//        'maxSal'=>$faker->numberBetween(101000-1000000),
//        'start_date'=>$faker->dateTimeThisYear,
//    ];
//});
$factory->define(App\Job::class, function (Faker\Generator $faker) {

    return [
        'user_id'=>\App\User::all()->random()->id,
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number'=>$faker->randomDigitNotNull,
        'key_qualification'=>$faker->text(5),
        'other_key_qualification'=>$faker->text(10),
        'experience'=>$faker->numberBetween(2-5). 'years',
        'skills'=>$faker->paragraph(10),
        'profession'=>$faker->text(10),
        'availability'=>$faker->dateTimeThisYear,
    ];
});

$factory->define(App\FlexJob::class, function (Faker\Generator $faker) {

    return [
        'user_id'=>\App\User::all()->random()->id,
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number'=>$faker->randomDigitNotNull,
        'key_qualification'=>$faker->text(5),
        'other_key_qualification'=>$faker->text(10),
        'experience'=>$faker->numberBetween(2-5). 'years',
        'skills'=>$faker->paragraph(10),
        'profession'=>$faker->text(10),
        'availability'=>$faker->dateTimeThisYear,
    ];
});

$factory->define(App\Mock::class, function (Faker\Generator $faker) {

    return [
        'user_id'=>\App\User::all()->random()->id,
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number'=>$faker->randomDigitNotNull,
        'category'=>$faker->text(5),
        'major'=>$faker->text(5),
        'date_interview'=>$faker->dateTimeThisYear,

    ];
});