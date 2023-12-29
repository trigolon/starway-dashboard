<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'ale',
            'firstname' => 'Ale',
            'lastname' => 'Liu',
            'email' => 'liuchen.alejandro@gmail.com',
            'password' => bcrypt('1505')
        ]);

        DB::table('employees')->insert([
            'name' => 'Harry',
            'is_active' => true,
            'date_joined' => '2021-01-01',
        ]);

        DB::table('employees')->insert([
            'name' => 'Erik',
            'is_active' => true,
            'date_joined' => '2021-01-01',
        ]);

        DB::table('attendances')->insert([
            'employee_id' => 1,
            'clock_in' => '2021-01-01 08:00:00',
            'clock_out' => '2021-01-01 17:00:00',
            'is_absent' => false,
        ]);

        DB::table('attendances')->insert([
            'employee_id' => 2,
            'clock_in' => '2021-01-02 08:00:00',
            'clock_out' => '2021-01-02 17:00:00',
            'is_absent' => false,
        ]);
    }
}
