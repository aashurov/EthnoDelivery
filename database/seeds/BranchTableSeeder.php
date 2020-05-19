<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\tblBranchModel::insert([
            'branchName' => 'Moscow',
            'branchPhone' => '+79266800899',
            'branchEmail' => 'ethnodeliverymoscow@gmail.com',
            'branchAddress' => 'Винокурова дом 7/5 корпус 3, 117449',
            'branchCity' => 'Москва',
            'branchCountry' => 'Российская Федерация',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        \App\tblBranchModel::insert([
            'branchName' => 'Tashkent',
            'branchPhone' => '+998990055995',
            'branchEmail' => 'ethnodeliverytashkent@gmail.com',
            'branchAddress' => 'проспект Амир Темур 1 дом',
            'branchCity' => 'Ташкент',
            'branchCountry' => 'Республика Узбекистан',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
