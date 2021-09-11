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
        \Illuminate\Support\Facades\DB::table('data_supports')->insert([
            [
                'name' => 'Where is the',
                'description' => '',
                'thumbnail' => 'Where is the',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'name' => 'Memory',
                'description' => '',
                'thumbnail' => '',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'name' => 'Video',
                'description' => '',
                'thumbnail' => '',
                'status' => '1',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],

        ]);

    }
}
