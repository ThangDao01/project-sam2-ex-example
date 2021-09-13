<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('accounts')->insert([[

            [
                'FirstName' => 'Đào Duy',
                'LastName' => 'Thắng',
                'Email' => 'thangdao202@gmail.com',
                'PhoneNumber' => '113',
                'PasswordHash' => '$2y$12$nF8.2qC/v5d8Q98fOAvoQO1D.qoXiuI7Cz3aicWD6EaS9vck22esi',
                'Salt' => 'VaiNoiLuon',
                'Age' => '20',
                'Role' => '1',
                'Status' => '1',
                'created_at' => '2021-09-01 06:36:11',
                'updated_at' => '2021-09-01 06:36:11'
            ],
            [
                'FirstName' => 'Phùng Mạnh',
                'LastName' => 'Quân',
                'Email' => 'phungmanhquan2002@gmail.com',
                'PhoneNumber' => '0364469332',
                'PasswordHash' => '$2y$12$XPjQ/7UuOlSDJ.nk3CoKIuLIBOFAJ37v4qZc6RzR7Y0TfTigDKucS',
                'Salt' => 'YD4Na',
                'Age' => '20',
                'Role' => '2',
                'Status' => '2',
                'created_at' => '2021-09-05 14:45:43',
                'updated_at' => '2021-09-05 14:45:43'
            ],
            [

                'FirstName' => 'Phùng Việt',
                'LastName' => 'Hưng',
                'Email' => 'hungvietphung36@gmail.com',
                'PhoneNumber' => '0336086589',
                'PasswordHash' => '$2y$12$kjZmsIxPPiHgLadmoGAI/uVHWReE5tCXKsghk4cO09aBbW8LlgOf.',
                'Salt' => 'hD84Y',
                'Age' => '18',
                'Role' => '1',
                'Status' => '1',
                'created_at' => '2021-09-05 15:35:47',
                'updated_at' => '2021-09-05 15:35:47'
            ],
            ///cường
            [
                'FirstName' => 'Trần Mạnh',
                'LastName' => 'Cường',
                'Email' => 'trancuong@gmail.com',
                'PhoneNumber' => '0345157732',
                'PasswordHash' => '$2y$12$qUtWXzBngNcTMDd1n6edk.uGtSQ7wuvkW7q2YSJPXSGbV0lAeB9qK',
                'Salt' => 'FeiN8',
                'Age' => '20',
                'Role' => '2',
                'Status' => '1',
                'created_at' => '2021-09-06 17:00:03',
                'updated_at' => '2021-09-06 17:00:03'
            ],
            ///hòa
            [
                'FirstName' => 'Đặng Văn',
                'LastName' => 'Hòa',
                'Email' => 'hoadvth2009007@fpt.edu.vn',
                'PhoneNumber' => '0817030802',
                'PasswordHash' => '',
                'Salt' => 'BfiC6',
                'Age' => '20',
                'Role' => '2',
                'Status' => '1',
                'created_at' => '2021-09-06 17:00:03',
                'updated_at' => '2021-09-06 17:00:03'
            ],
        ]]);
    }
}
