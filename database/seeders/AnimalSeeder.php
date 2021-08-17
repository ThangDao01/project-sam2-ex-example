<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
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
            'values' => 'chicken',
            'words_vi' => 'con gà',
            'words_en' => 'chicken',
            'voice_vi' => 'conga.mp3',
            'voice_en' => 'chicken.mp3',
            'images' => 'conga.png',
            'key' => 'animal,brown',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'dog',
            'words_vi' => 'con chó',
            'words_en' => 'dog',
            'voice_vi' => 'concho.mp3',
            'voice_en' => 'dog.mp3',
            'images' => 'concho.png',
            'key' => 'animal,brown',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'cat',
            'words_vi' => 'con mèo',
            'words_en' => 'cat',
            'voice_vi' => 'conmeo.mp3',
            'voice_en' => 'cat.mp3',
            'images' => 'conmeo.png',
            'key' => 'animal,White',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'elephant',
            'words_vi' => 'con voi',
            'words_en' => 'elephant',
            'voice_vi' => 'convoi.mp3',
            'voice_en' => 'elephant.mp3',
            'images' => 'convoi.png',
            'key' => 'animal,gray',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'horse',
            'words_vi' => 'con ngựa',
            'words_en' => 'horse',
            'voice_vi' => 'conngua.mp3',
            'voice_en' => 'horse.mp3',
            'images' => 'conngua.png',
            'key' => 'animal,white',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'penguin',
            'words_vi' => 'chim cánh cụt',
            'words_en' => 'penguin',
            'voice_vi' => 'chimcanhcut.mp3',
            'voice_en' => 'penguin.mp3',
            'images' => 'chimcanhcut.png',
            'key' => 'animal,black',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'Dolphin',
            'words_vi' => 'cá heo',
            'words_en' => 'Dolphin',
            'voice_vi' => 'caheo.mp3',
            'voice_en' => 'dolphin.mp3',
            'images' => 'caheo.png',
            'key' => 'animal,blue',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'tiger',
            'words_vi' => 'con hổ',
            'words_en' => 'tiger',
            'voice_vi' => 'conho.mp3',
            'voice_en' => 'tiger.mp3',
            'images' => 'conho.png',
            'key' => 'animal,orange',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'lion',
            'words_vi' => 'sư tử',
            'words_en' => 'lion',
            'voice_vi' => 'sutu.mp3',
            'voice_en' => 'lion.mp3',
            'images' => 'sutu.png',
            'key' => 'animal,rea,orange',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'panda',
            'words_vi' => 'con gấu trúc',
            'words_en' => 'panda',
            'voice_vi' => 'gautruc.mp3',
            'voice_en' => 'panda.mp3',
            'images' => 'gautruc.png',
            'key' => 'animal,black,white',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values' => 'rabbit',
            'words_vi' => 'con thỏ',
            'words_en' => 'rabbit',
            'voice_vi' => 'contho.mp3',
            'voice_en' => 'rabbit.mp3',
            'images' => 'contho.png',
            'key' => 'animal,blue',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values'=> 'turtle',
            'words_vi' => 'con rùa',
            'words_en' => 'turtle',
            'voice_vi' => 'conrua.mp3',
            'voice_en' => 'turtle.mp3',
            'images' => 'conrua.png',
            'key' => 'animal,green',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values'=> 'dinosaur',
            'words_vi' => 'khủng long',
            'words_en' => 'dinosaur',
            'voice_vi' => 'khunglong.mp3',
            'voice_en' => 'dinosaur.mp3',
            'images' => 'khunglong.png',
            'key' => 'animal,green',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ],[
            'values'=> 'fish',
            'words_vi' => 'con cá',
            'words_en' => 'fish',
            'voice_vi' => 'conca.mp3',
            'voice_en' => 'fish.mp3',
            'images' => 'conca.png',
            'key' => 'animal,yellow,blue',
            'createBy' => 'hoadvth2009007@fpt.edu.vn',
        ]
        ]);

    }
}
