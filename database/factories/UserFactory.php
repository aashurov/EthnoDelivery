<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
// use Faker\Generator as Faker;
// use Faker\Factory as Faker;
use Faker\Provider\ru_RU\Address as Faker;

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    for ($randomNumber = mt_rand(1, 9), $i = 1; $i < 12; $i++) {
        $randomNumber .= mt_rand(0, 9);
    }
    
    // $array = array(0=>"administrator", 1=>"manager", 2=>"courier", 3=>"director", 4=>"staff", 5=>"customer");
    // for ($i = 0; $i < count($array); $i++)
    // {
    //   $role = $array[$i];
    // }
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'phone' => '+' . $randomNumber,
        'role_id' => $faker->randomElement(['1', '2', '3', '4', '5']),
        'avatar' => 'default.jpg',
        'address' => $faker->address,
        'status' => '1',


    ];
});
