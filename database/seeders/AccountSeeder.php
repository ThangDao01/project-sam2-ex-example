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
                'FirstName' => 'Quân',
                'LastName' => 'Mạnh',
                'Email' => 'phungmanhquan2002@gmail.com',
                'PhoneNumber' => '0364469332',
                'PasswordHash' => '$2y$12$XPjQ/7UuOlSDJ.nk3CoKIuLIBOFAJ37v4qZc6RzR7Y0TfTigDKucS',
                'Salt' => 'YD4Na',
                'Age' => '20',
                'Role' => '1',
                'Status' => '2',
                'created_at' => '2021-09-05 14:45:43',
                'updated_at' => '2021-09-05 14:45:43'
            ],
            ///hưng
            [
                'FirstName' => 'Phùng',
                'LastName' => 'Hưng',
                'Email' => 'hungvietphung36@gmail.com',
                'PhoneNumber' => '0336086589',
                'PasswordHash' => '$2y$12$kjZmsIxPPiHgLadmoGAI/uVHWReE5tCXKsghk4cO09aBbW8LlgOf.',
                'Salt' => 'hD84Y',
                'Age' => '18',
                'Role' => '2',
                'Status' => '1',
                'created_at' => '2021-09-05 15:35:47',
                'updated_at' => '2021-09-05 15:35:47'
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
