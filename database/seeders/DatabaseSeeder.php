<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use App\Models\Rental;
use App\Models\Customer;
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
        $this->call(UsersSeeder::class);
        User::factory(10)->create();
        Car::factory(50)->create();
        Customer::factory(100)->create();
        Rental::factory(100)->create();
    }
}