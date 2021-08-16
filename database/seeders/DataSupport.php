<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataSupport extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('data_supports')->insert([[
            'values' => '',
            'words_vi' => '',
            'words_en' => '',
            'voice_vi' => '',
            'voice_en' => '',
            'images' => '',
            'key' => '',
            'createBy' => '',]
        ]);


    }
}
