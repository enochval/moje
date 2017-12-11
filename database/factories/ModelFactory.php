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
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    $reg_no = \App\Modules\Admission\Models\Registration::all();

    $registration_no =[];

    return [
        'school_id' => '',
        'registration_number' => ,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/


$factory->define(\App\Modules\Admission\Models\Registration::class, function (Faker\Generator $faker) {

    return [
        'registration_number' => 'MOJ/REG/2017'.$faker->unique()->numberBetween(1000, 2000),
        'first_faculty_id' => $faker->numberBetween(1, 10),
        'second_faculty_id' => $faker->numberBetween(1, 10),
        'first_department_id' => $faker->numberBetween(1, 10),
        'second_department_id' => $faker->numberBetween(1, 10),
        'admin_officer_review' => 'checked',
        'registrar_review' => 'seen',
        'created_at' => $faker->dateTime,
    ];
});
