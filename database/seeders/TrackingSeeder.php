<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('trackings')->insert([
            [
                'CourseId'=>2,
                'LessonId'=>4,
                'LessonFinish'=>1,
                'email'=>'nguyennga@gmail.com',
                'comment'=>'',
                'updated_at'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
            ],[
                'CourseId'=>1,
                'LessonId'=>7,
                'LessonFinish'=>1,
                'email'=>'longdjok@gmail.com',
                'comment'=>'',
                'updated_at'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
            ],[
                'CourseId'=>1,
                'LessonId'=>4,
                'LessonFinish'=>1,
                'email'=>'longdjok@gmail.com',
                'comment'=>'',
                'updated_at'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
            ],
        ]);

    }
}
