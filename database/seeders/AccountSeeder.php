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
            //thắng
            [
                'FirstName' => 'Đào',
                'LastName' => 'Thắng',
                'Email' => 'thangdao202@gmail.com',
                'PhoneNumber' => '113',
                'PasswordHash' => '$2y$12$nF8.2qC/v5d8Q98fOAvoQO1D.qoXiuI7Cz3aicWD6EaS9vck22esi',
                'Salt' => 'VaiNoiLuon',
                'Age' => '20',
                'Role' => '0',
                'Status' => '1',
                'created_at' => '2021-09-01 06:36:11',
                'updated_at' => '2021-09-01 06:36:11'
            ],
            ///quân
            [
                'FirstName' => '',
                'LastName' => '',
                'Email' => '',
                'PhoneNumber' => '',
                'PasswordHash' => '',
                'Salt' => '',
                'Age' => '',
                'Role' => '2',
                'Status' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            ///hưng
            [
                'FirstName' => '',
                'LastName' => '',
                'Email' => '',
                'PhoneNumber' => '',
                'PasswordHash' => '',
                'Salt' => '',
                'Age' => '',
                'Role' => '2',
                'Status' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            ///cường
            [
                'FirstName' => '',
                'LastName' => '',
                'Email' => '',
                'PhoneNumber' => '',
                'PasswordHash' => '',
                'Salt' => '',
                'Age' => '',
                'Role' => '2',
                'Status' => '',
                'created_at' => '',
                'updated_at' => ''
            ],
            ///hòa
            [
                'FirstName' => '',
                'LastName' => '',
                'Email' => '',
                'PhoneNumber' => '',
                'PasswordHash' => '',
                'Salt' => '',
                'Age' => '',
                'Role' => '2',
                'Status' => '',
                'created_at' => '',
                'updated_at' => ''
            ],

        ]);

    }
}
