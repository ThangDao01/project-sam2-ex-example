<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('courses')->insert([[
            'name' => 'Learning Alphabet',
            'price' => '0',
            'description' => 'Đảm bảo ghi nhớ bảng chữ cái tiếng Anh trong vòng 7 ngày',
            'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630263353/dgj86ljkmlfslwbo2xdk.jpg',
            'listLessonId' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'name' => 'Learning Alphanumeric',
            'price' => '0',
            'description' => 'Đảm bảo ghi nhớ các chữ số tiếng Anh từ 1 đến 10 trong vòng 3 ngày',
            'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630263724/wxp3upxcgjlolpiziztm.jpg',
            'listLessonId' => '27,28,29,30,31,32,33,34,35,36',
            'TimeFinish' => 3,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'name' => 'Learning Animal',
            'price' => '0',
            'description' => 'Tìm hiểu về động vật dễ thương cho trẻ',
            'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630305708/uftdiaohcljnphvxwelp.jpg',
            'listLessonId' => '',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
            ]);

    }
}
