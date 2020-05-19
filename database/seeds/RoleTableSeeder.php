<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
            'user_id' => '1',
            'role' => 'Administrator',
        ]);
        \App\Role::insert([
            'user_id' => '2',
            'role' => 'Manager',
        ]);
        \App\Role::insert([
            'user_id' => '3',
            'role' => 'Courier',
        ]);
        \App\Role::insert([
            'user_id' => '4',
            'role' => 'Director',
        ]);
        \App\Role::insert([
            'user_id' => '5',
            'role' => 'Staff',
        ]);

        \App\Role::insert([
            'user_id' => '6',
            'role' => 'Customer',
        ]);

        \App\Role::insert([
            'user_id' => '7',
            'role' => 'Manager',
        ]);
        \App\Role::insert([
            'user_id' => '8',
            'role' => 'Courier',
        ]);
        \App\Role::insert([
            'user_id' => '9',
            'role' => 'Director',
        ]);
        \App\Role::insert([
            'user_id' => '10',
            'role' => 'Staff',
        ]);
        \App\Role::insert([
            'user_id' => '11',
            'role' => 'Customer',
        ]);
        
    }
}
