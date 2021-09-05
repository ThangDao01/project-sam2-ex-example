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
            'description' => 'Make sure to memorize the English alphabet within 7 days',
            'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630263353/dgj86ljkmlfslwbo2xdk.jpg',
            'key' => 'character',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'name' => 'Learning Alphanumeric',
            'price' => '0',
            'description' => 'Guaranteed to memorize the alphanumeric within 7 days',
            'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630263724/wxp3upxcgjlolpiziztm.jpg',
            'key' => 'number',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'name' => 'Learning Animal',
            'price' => '0',
            'description' => 'Learn about cute animals for babies within 7 days',
            'thumbnail' => 'https://res.cloudinary.com/thangdao04/image/upload/v1630305708/uftdiaohcljnphvxwelp.jpg',
            'key' => 'animal',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
            ]);

    }
}
