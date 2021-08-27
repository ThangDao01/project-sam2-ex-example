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
            'course' => 'Learning Character',
            'price' => '0',
            'description' => 'blabla',
            'key' => 'character',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], [
            'course' => 'Learning Number',
            'price' => '0',
            'description' => 'blabla',
            'key' => 'number',
            'TimeFinish' => 7,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);

    }
}
