<?php

use Illuminate\Database\Seeder;

class UserConnectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // 'user_id', 'role_id', 'branch_id', 'company_id'
    
    public function run()
    {
        //admin
        \App\tblUserConnectorModel::insert([
            'user_id' => '1',
            'role_id' => '0',
            'branch_id' => '1',
            'company_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //managerm
        \App\tblUserConnectorModel::insert([
            'user_id' => '2',
            'role_id' => '1',
            'branch_id' => '1',
            'company_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //courierm
        \App\tblUserConnectorModel::insert([
            'user_id' => '3',
            'role_id' => '2',
            'branch_id' => '1',
            'company_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //directorm
        \App\tblUserConnectorModel::insert([
            'user_id' => '4',
            'role_id' => '3',
            'branch_id' => '1',
            'company_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //staff
        \App\tblUserConnectorModel::insert([
            'user_id' => '5',
            'role_id' => '4',
            'branch_id' => '1',
            'company_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //customerm
        \App\tblUserConnectorModel::insert([
            'user_id' => '6',
            'role_id' => '5',
            'branch_id' => '1',
            'company_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //managert
        \App\tblUserConnectorModel::insert([
            'user_id' => '7',
            'role_id' => '1',
            'branch_id' => '2',
            'company_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //couriert
        \App\tblUserConnectorModel::insert([
            'user_id' => '8',
            'role_id' => '2',
            'branch_id' => '2',
            'company_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //directort
        \App\tblUserConnectorModel::insert([
            'user_id' => '9',
            'role_id' => '3',
            'branch_id' => '2',
            'company_id' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //stafft
        \App\tblUserConnectorModel::insert([
            'user_id' => '10',
            'role_id' => '4',
            'branch_id' => '2',
            'company_id' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //customert
        \App\tblUserConnectorModel::insert([
            'user_id' => '11',
            'role_id' => '5',
            'branch_id' => '2',
            'company_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
