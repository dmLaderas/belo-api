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
$factory->define(Belo\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Belo\Illness::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->bs,
    ];
});

$factory->define(Belo\Patient::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'middle_name' => $faker->optional(0.6)->lastName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['male', 'female']),
        'birthdate' => $faker->date('Y-m-d'),
        'city' => $faker->cityPrefix,
        'province' => $faker->state,
        'contact_number' => $faker->phoneNumber,
        'address' => $faker->streetAddress

    ];
});

$factory->define(Belo\LoyaltyCard::class, function (Faker\Generator $faker) {
    return [
        'card_number' => $faker->creditCardNumber,
        'issued_at' => $faker->dateTime(),
        'patient_id' => $faker->numberBetween(1, 100)
    ];
});