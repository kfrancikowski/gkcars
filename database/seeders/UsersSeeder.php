<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'firstname' => 'Grzegorz',
                'lastname' => 'Krzemiński',
                'email' => 'grzegorz.krzemo@gmail.com',
                'password' => bcrypt('123456')
            ]
        );
        DB::table('users')->insert(
            [
                'firstname' => 'Test',
                'lastname' => 'Test',
                'email' => 'test@test.com',
                'password' => bcrypt('test')
            ]
        );
    }
}