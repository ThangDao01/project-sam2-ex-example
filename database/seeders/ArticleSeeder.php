<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
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
            'url' => '',
            'categories' => '',
            'title' => '',
            'Detail' => '',
            'Author' => '',
        ],
        ]);

    }
}
