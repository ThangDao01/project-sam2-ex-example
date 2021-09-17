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
        \Illuminate\Support\Facades\DB::table('accounts')->insert([
            [
                'FirstName' => 'Đào Duy',
                'LastName' => 'Thắng',
                'Email' => 'thangdao202@gmail.com',
                'PhoneNumber' => '0369630471',
                'PasswordHash' => '$2y$12$yVfsbgXZbvTNAlWm394hzefwOdAOvN3LOyp73uiDftyzK8F38Hhuu',
                'Salt' => 'RHBF1',
                'Age' => '20',
                'Role' => 1,
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
                'Role' => 2,
                'Status' => '1',
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
                'Role' => 2,
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
                'Role' => 2,
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
                'PasswordHash' => '$2y$12$G4NpjnWJyPWEN66rB8tLlOeNVLLKVkagHEsL1a3zl4E/KfNIxW2O.',
                'Salt' => 'BfiC6',
                'Age' => '20',
                'Role' => 2,
                'Status' => '1',
                'created_at' => '2021-09-06 17:00:03',
                'updated_at' => '2021-09-06 17:00:03'
            ],
            [
                'FirstName' => 'Hoài',
                'LastName' => 'Thu',
                'Email' => 'hoaithu@gmail.com',
                'PhoneNumber' => '0987654321',
                'PasswordHash' => '$2y$12$1WFMSQg8fbwOTBFF1EDp7.wNs1w.tjF/onvyJOt3fQTZ1efUBca0C',
                'Salt' => 'h8KbX',
                'Age' => '19',
                'Role' => 3,
                'Status' => '1',
                'created_at' => '2021-09-09 22:02:51',
                'updated_at' => '2021-09-09 22:02:51'
            ],
            [
                'FirstName' => 'Vũ',
                'LastName' => 'Nga',
                'Email' => 'vunga@gmail.com',
                'PhoneNumber' => '0123456788',
                'PasswordHash' => '$2y$12$97ARMBPKUDglbj1lcFbEhuW0keLVUjCrgY9/wZr.JKur4TqTP9Dy6',
                'Salt' => 'enKRF',
                'Age' => '20',
                'Role' => 3,
                'Status' => '1',
                'created_at' => '2021-09-09 22:05:26',
                'updated_at' => '2021-09-09 22:05:26'
            ],
            [
                'FirstName' => 'Phạm',
                'LastName' => 'Xuyên',
                'Email' => 'phamxuyen@gmail.com',
                'PhoneNumber' => '0987654321',
                'PasswordHash' => '$2y$12$bBYEuUG/2JayLuMlTLajyesS3ylU76akGT0pRb3AqdM4f7mYbfTbK',
                'Salt' => 'sE4dn',
                'Age' => '20',
                'Role' => 3,
                'Status' => '1',
                'created_at' => '2021-09-09 22:07:21',
                'updated_at' => '2021-09-09 22:07:21'
            ],
            [
                'FirstName' => 'Nguyễn',
                'LastName' => 'Nga',
                'Email' => 'nguyennga@gmail.com',
                'PhoneNumber' => '0123456799',
                'PasswordHash' => '$2y$12$nm4KT.v7L4DN0/b9NFjciee5Z4l6ZgU.sYidRHnMfT9FGzF3zHN7G',
                'Salt' => 'TAPr6',
                'Age' => '19',
                'Role' => 3,
                'Status' => '1',
                'created_at' => '2021-09-09 22:09:34',
                'updated_at' => '2021-09-09 22:09:34'
            ],
            [
                'FirstName' => 'Hắc',
                'LastName' => 'Long',
                'Email' => 'longdjok@gmail.com',
                'PhoneNumber' => '0123456178',
                'PasswordHash' => '$2y$12$cv9LeC7rcjh28AT010TyA.Rm83sZBIg90qH5tshGMlHmjBhQTfg9m',
                'Salt' => '9q6FV',
                'Age' => '21',
                'Role' => 3,
                'Status' => '1',
                'created_at' => '2021-09-09 22:14:27',
                'updated_at' => '2021-09-09 22:14:27'
            ],[
                'FirstName' => 'Khách',
                'LastName' => 'Khách Hàng 01',
                'Email' => 'user01@gmail.com',
                'PhoneNumber' => '1234567890',
                'PasswordHash' => '$2y$12$kGP8ZSSOWqcAPz043U5FiuG4N943uyYtzCnJHGFm37zE/1202wHKS',
                'Salt' => '5xv4a',
                'Age' => '21',
                'Role' => 3,
                'Status' => '1',
                'created_at' => '2021-09-09 22:14:27',
                'updated_at' => '2021-09-09 22:14:27'
            ],
        ]);
    }
}
