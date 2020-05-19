<?php

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // 'parcelPlanName', 'parcelPlanPrice', 'parcelPlanDate'

    public function run()
    {
        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Эконом',
            'parcelPlanPrice' => '6',
            'parcelPlanDate' => '5-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Стандарт (Москва-Ташкент)',
            'parcelPlanPrice' => '10',
            'parcelPlanDate' => '3-5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Стандарт (Ташкент-Москва)',
            'parcelPlanPrice' => '11',
            'parcelPlanDate' => '3-5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Ультрасрочный',
            'parcelPlanPrice' => '30',
            'parcelPlanDate' => '1-2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Документ (До офиса)',
            'parcelPlanPrice' => '11',
            'parcelPlanDate' => '5-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Документ (До получателя в Москве)',
            'parcelPlanPrice' => '17',
            'parcelPlanDate' => '3-5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelPlanModel::insert([
            'parcelPlanName' => 'Документ (Ультрасрочный)',
            'parcelPlanPrice' => '30',
            'parcelPlanDate' => '1-2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
