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
                'CourseId'=>1,
                'LessonId'=>1,
                'LessonFinish'=>1,
                'email'=>'user01@gmail.com',
                'comment'=>'',
                'updated_at'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
            ],
        ]);

    }
}
