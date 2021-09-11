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
        Account::truncate();
        $adminRoles = Roles::where('name', 'admin')->first();
        $authorRoles = Roles::where('name', 'author')->first();
        $userRoles = Roles::where('name', 'user')->first();
        $admin = Account::create(
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
//                'created_at' => '2021-09-01 06:36:11',
//                'updated_at' => '2021-09-01 06:36:11'
            ]);
        $author = Account::create(
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
//                'created_at' => '2021-09-05 14:45:43',
//                'updated_at' => '2021-09-05 14:45:43'
            ]);
        $user = Account::create(
            [
                'FirstName' => 'Manh',
                'LastName' => 'Quan',
                'Email' => 'anhquan123@gmail.com',
                'PhoneNumber' => '0364469332',
                'PasswordHash' => '12345678',
                'Salt' => 'yBjwF',
                'Age' => '20',
                'Role' => '1',
                'Status' => '2',
//                'created_at' => '2021-09-05 14:45:43',
//                'updated_at' => '2021-09-05 14:45:43'
            ]);
        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);

    }
}
