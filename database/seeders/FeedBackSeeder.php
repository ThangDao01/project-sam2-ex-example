<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedBackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('feed_backs')->insert([
            [
                'Name' => 'Thắng',
                'Email' => 'thangdao202@gmail.com',
                'Message' => 'Một  trang website tuyệt vời :))',
                'Vote' => 5,
                'Seen' => true,
                'Location' => 'home',
                'created_at' => '2021-09-01 22:02:51',
                'updated_at' => '2021-09-01 22:02:51'
            ],
            [
                'Name' => 'Long',
                'Email' => 'longdjok@gmail.com',
                'Message' => 'Giao diện  ổn',
                'Vote' => 4,
                'Seen' => true,
                'Location' => 'home',
                'created_at' => '2021-09-02 22:02:51',
                'updated_at' => '2021-09-02 22:02:51'
            ], [
                'Name' => 'Long',
                'Email' => 'longdjok@gmail.com',
                'Message' => 'Bài học còn ít cần bổ sung thềm ảnh còn mờ',
                'Vote' => 3,
                'Seen' => true,
                'Location' => 'cr=1',
                'created_at' => '2021-09-09 22:02:51',
                'updated_at' => '2021-09-09 22:02:51'
            ], [
                'Name' => 'Long',
                'Email' => 'longdjok@gmail.com',
                'Message' => 'Ảnh còn mờ chưa thực sự chất lượng',
                'Vote' => 3,
                'Seen' => true,
                'Location' => 'cr=2',
                'created_at' => '2021-09-09 22:02:51',
                'updated_at' => '2021-09-09 22:02:51'
            ], [
                'Name' => 'Thu',
                'Email' => 'hoaithu@gmail.com',
                'Message' => 'Những trò chơi khá hay',
                'Vote' => 4,
                'Seen' => true,
                'Location' => 'cr=2',
                'created_at' => '2021-09-09 22:02:51',
                'updated_at' => '2021-09-09 22:02:51'
            ], [
                'Name' => 'Nga',
                'Email' => 'nguyennga@gmail.com',
                'Message' => 'Những trò chơi khá hay',
                'Vote' => 4,
                'Seen' => true,
                'Location' => 'home',
                'created_at' => '2021-09-09 22:02:51',
                'updated_at' => '2021-09-09 22:02:51'
            ], [
                'Name' => 'Nga',
                'Email' => 'nguyennga@gmail.com',
                'Message' => 'Những trò chơi khá hay',
                'Vote' => 4,
                'Seen' => true,
                'Location' => 'cr=2',
                'created_at' => '2021-09-09 22:02:51',
                'updated_at' => '2021-09-09 22:02:51'
            ],
        ]);

    }
}
