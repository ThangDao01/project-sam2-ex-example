<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MaterialSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('materials')->insert([
            [
                'name' => 'Where is the',
                'description' => 'Câu hỏi Where is the là các câu hỏi giao tiếp tiếng Anh thiếu nhi gần gũi',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631483228/mtavy1vsokpuni9yyx03.png',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'name' => 'Memory',
                'description' => 'Giúp trẻ phát triển khả năng ghi nhớ qua hình ảnh và âm thanh',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631483337/kgnc3pc2lffkpmpp3ope.png',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'name' => 'Matrix',
                'description' => 'Matrix',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631483570/qg6z3nmdanuooiwaoinm.png',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'name' => 'Video',
                'description' => 'Video',
                'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1631483631/deb2cd5kqyqrsnj5vgjf.png',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],

        ]);

    }
}
