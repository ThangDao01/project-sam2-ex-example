<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('accounts')->insert([
            'FirstName' => 'test',
            'LastName' => '01',
            'Email' => 'test@gmail.com',
            'PasswordHash' => '',
            'Salt' => '',
            'Age' => '0',
            'Role' => '0',
            'Status' => '0',
            'created_at' => '2021-08-26 08:27:10',
            'updated_at' => '2021-08-26 08:27:11'
        ]);
    }
}
