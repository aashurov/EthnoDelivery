<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ru_RU');
        

        // for ( $i = 1; $i < 11; $i++) {
        // $imageDownload = $faker -> image(storage_path('app/public/avatars'));
        // // $imageDownload = $faker -> image(storage_path('app/public/avatars'), 300,300, 'people', true);

        // $imagePath = explode('/', $imageDownload);
        // $imageName = end($imagePath);
        // }
        
        for ($randomNumberuz = mt_rand(1, 9), $i = 1; $i < 7; $i++) {
            $randomNumberuz .= mt_rand(0, 9);
        }
        for ($randomNumberru = mt_rand(1, 9), $i = 1; $i < 10; $i++) {
            $randomNumberru .= mt_rand(0, 9);
        }

        
            \App\User::insert([
                'name' => 'Administrator',
                'email' => 'administrator@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+998970000675',
                'role_id' => '0',
                'role' => 'Administrator',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Managerm',
                'email' => 'managerm@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+7' . $randomNumberru,
                'role_id' => '1',
                'role' => 'Manager',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Courierm',
                'email' => 'courierm@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+7' . $randomNumberru,
                'role_id' => '2',
                'role' => 'Courier',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Directorm',
                'email' => 'directorm@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+7' . $randomNumberru,
                'role_id' => '3',
                'role' => 'Director',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Staffm',
                'email' => 'staffm@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+7' . $randomNumberru,
                'role_id' => '4',
                'role' => 'Staff',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Customerm',
                'email' => 'customerm@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+7' . $randomNumberru,
                'role_id' => '5',
                'role' => 'Customer',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Managert',
                'email' => 'managert@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+99897' . $randomNumberuz,
                'role_id' => '1',
                'role' => 'Manager',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Couriert',
                'email' => 'couriert@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+99897' . $randomNumberuz,
                'role_id' => '2',
                'role' => 'Courier',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Directort',
                'email' => 'directort@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+99897' . $randomNumberuz,
                'role_id' => '3',
                'role' => 'Director',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Stafft',
                'email' => 'stafft@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+99897' . $randomNumberuz,
                'role_id' => '4',
                'role' => 'Staff',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
            \App\User::insert([
                'name' => 'Customert',
                'email' => 'customert@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone' => '+99897' . $randomNumberuz,
                'role_id' => '5',
                'role' => 'Customer',
                'avatar' => '/storage/avatars/default.jpg',
                'address' => $faker->address,
                'status' => '1',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                ]);
    }
}
