<?php

use Illuminate\Database\Seeder;

class ParcelStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'В обработке',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'Принят в городе отправителя',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'Отправлен в транзитный город',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'Отправлен в город получателя',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'Принят в городе получателя',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'На складе готов к выдаче',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'На доставке у курьера',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'Возвращен на склад доставки',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\tblParcelStatusModel::insert([
            'parcelStatus' => 'Доставлен',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       
    }
}
