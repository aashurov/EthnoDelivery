<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CompanyTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(UserConnectorTableSeeder::class);
         $this->call(BranchTableSeeder::class);
         $this->call(PlanTableSeeder::class);
         $this->call(ParcelStatusTableSeeder::class);
         $this->call(ParcelCurrencyTableSeeder::class);

    }
}
