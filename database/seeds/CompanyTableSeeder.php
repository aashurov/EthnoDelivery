<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('ru_RU');

     
        for ($randomNumberuz = mt_rand(1, 9), $i = 1; $i < 7; $i++) {
            $randomNumberuz .= mt_rand(0, 9);
        }
        for ($randomNumberru = mt_rand(1, 9), $i = 1; $i < 10; $i++) {
            $randomNumberru .= mt_rand(0, 9);
        }

        \App\tblCompanyModel::insert([
            'companyName' => 'Ethno Delivery Moscow',
            'companyPhone' => '+79266800899',
            'companyEmail' => 'ethnodeliverymoscow@gmail.com',
            'companyAddress' => 'Винокурова дом 7/5 корпус 3, 117449',
            'companyCity' => 'Москва',
            'companyCountry' => 'Российская Федерация',
            'companyBalance' => '100'

        ]);

        \App\tblCompanyModel::insert([
            'companyName' => 'Ethno Delivery Tashkent',
            'companyPhone' => '+998990055995',
            'companyEmail' => 'ethnodeliverytashkent@gmail.com',
            'companyAddress' => 'проспект Амир Темур 1 дом',
            'companyCity' => 'Ташкент',
            'companyCountry' => 'Республика Узбекистан',
            'companyBalance' => '100'

        ]);

        \App\tblCompanyModel::insert([
            'companyName' => 'CompanyMoscow',
            'companyPhone' => '+7' . $randomNumberru,
            'companyEmail' => 'ethnodeliverymoscow@gmail.com',
            'companyAddress' => $faker->address,
            'companyCity' => 'Москва',
            'companyCountry' => 'Российская Федерация',
            'companyBalance' => '100'

        ]);

        \App\tblCompanyModel::insert([
            'companyName' => 'CompanyTashkent',
            'companyPhone' => '+99897' . $randomNumberuz,
            'companyEmail' => 'ethnodeliverytashkent@gmail.com',
            'companyAddress' => $faker->address,
            'companyCity' => 'Ташкент',
            'companyCountry' => 'Республика Узбекистан',
            'companyBalance' => '100',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
// $faker->address
