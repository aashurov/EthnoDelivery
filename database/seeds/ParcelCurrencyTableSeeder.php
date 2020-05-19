<?php

use Illuminate\Database\Seeder;

class ParcelCurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'currencyName', 'currencyCode', 'currencyPrice'
        //
        \App\tblParcelCurrencyModel::insert([
            'currencyName' => 'US Dollar',
            'currencyCode' => 'USD',
            'currencyPrice' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelCurrencyModel::insert([
            'currencyName' => 'Rubl',
            'currencyCode' => 'RUB',
            'currencyPrice' => '63.8156',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelCurrencyModel::insert([
            'currencyName' => 'UZ',
            'currencyCode' => 'UZS',
            'currencyPrice' => '9500',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
