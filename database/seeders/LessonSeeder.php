<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('lessons')->insert([
            [
                'lessonName' => 'Learning character A',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '1',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character B',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '2',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character C',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '3',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character D',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '4',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character E',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '5',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character F',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '6',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character G',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '7',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character H',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '8',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character I',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '9',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character J',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '10',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character K',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '11',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character L',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '12',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character M',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '13',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character N',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '14',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character O',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '15',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character P',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '16',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character Q',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '17',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character R',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '18',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character S',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '19',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character U',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '20',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character V',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '21',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character W',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '22',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character Y',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '23',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character T',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '24',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character X',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '25',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning character Z',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '26',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 1',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '27',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 2',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '28',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 3',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '29',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 4',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '30',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 5',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '31',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 6',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '32',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 7',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '33',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 8',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '34',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 9',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '35',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'lessonName' => 'Learning number 10',
                'listMaterialId'=> '1,2,3,4,5',
                'dataSupportId' => '36',
                'status'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);

    }
}
