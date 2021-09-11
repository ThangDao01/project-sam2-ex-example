<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Article;
use App\Models\Course;
use App\Models\DataSupport;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainUserController extends Controller
{
    //
    public function getSeed(){
        $list = Account::all();
        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $date2=Carbon::now('Asia/Ho_Chi_Minh');
        return view('tool.seeder',[
            'list' => $list,
            'date' =>$date
        ]);
    }
    public function getCourse(){
        $obj = Course::all();
        return view('user.banggia',[
            'listCourse' => $obj
        ]);
    }
    public function getLessonByCourse($id)
    {
        $listLessonId = explode(",", trim(Course::all()->where('id',$id)->pluck('listLessonId'),
            '["]'));
        $lesson = array();
        for ($i=0;$i<count($listLessonId);$i++){
            if ($listLessonId[$i]){
                $lesson[$i] = Lesson::find($listLessonId[$i]);
            }
        }
        return view('material.lesson-view', ['listLesson' => $lesson]);
    }

    public function articleDetail($url){
        $description = DB::table('articles')->where('url', $url)->first();
        return view('user.article',[
            'description' =>$description
        ]);
    }

    public function memoryGame($id,$nextLink){
        $main = DataSupport::find($id);
        $idKey = DataSupport::where('key', $main->key)->get();
        $min = DataSupport::where('key', $main->key)->first()->id;
        $max = $min + sizeof($idKey) - 1;
        $data1ID = rand($min, $max);
        $data2ID = rand($min, $max);
//tạo 2 id random không trùng
        do {
            $data1ID = rand($min, $max);
        } while ($data1ID == $id);
        do {
            $data2ID = rand($min, $max);
        } while ($data2ID == $id || $data2ID == $data1ID);

// tạo 2 dữ liệu mẫu
        $data1 = DataSupport::find($data1ID);
        $data2 = DataSupport::find($data2ID);

        $listDataM = array($main,$data1,$data2);
//        return $listData;
        return view('material-template.memory-game', [
            'list' => $listDataM,
            'next'=>$nextLink
        ]);
    }

    public function whatIsThis($id,$nextLink)
    {
        $main = DataSupport::find($id);
        $idKey = DataSupport::where('key', $main->key)->get();
        $min = DataSupport::where('key', $main->key)->first()->id;
        $max = $min + sizeof($idKey) - 1;
        $data1ID = rand($min, $max);
        $data2ID = rand($min, $max);
//tạo 2 id random không trùng
        do {
            $data1ID = rand($min, $max);
        } while ($data1ID == $id);
        do {
            $data2ID = rand($min, $max);
        } while ($data2ID == $id || $data2ID == $data1ID);

// tạo 2 dữ liệu mẫu
        $data1 = DataSupport::find($data1ID);
        $data2 = DataSupport::find($data2ID);

// random không trùng đáp án ABC
        $lc1 = rand(1, 3);
        $lc2 = rand(1, 3);
        $lc3 = rand(1, 3);
        do {
            $lc2 = rand(1, 3);
        } while ($lc1 == $lc2);
        do {
            $lc3 = rand(1, 3);
        } while ($lc3 == $lc1 || $lc3 == $lc2);
        $listData[$lc1] = $main;
        $listData[$lc2] = $data1;
        $listData[$lc3] = $data2;

        $listDataM = array($listData[1], $listData[2], $listData[3]);
//        return $listData;
        return view('material-template.what-is-this', [
            'list' => $listDataM,
            'main' => $main,
            'next'=>$nextLink
        ]);
    }
    public function listening($id)
    {
        $main = DataSupport::find($id);

        return view('material-template.listening', [
            'main' => $main
        ]);
    }
    public function video($id,$nextLink)
    {
        $main = DataSupport::find($id);
        return view('material-template.video', [
            'main' => $main,
            'next'=>$nextLink
        ]);
    }

    public function whereIsThe($id,$nextLink)
    {
        $main = DataSupport::find($id);
        $idKey = DataSupport::where('key', $main->key)->get();
        $min = DataSupport::where('key', $main->key)->first()->id;
        $max = $min + sizeof($idKey) - 1;
        $data1ID = rand($min, $max);
        $data2ID = rand($min, $max);
//tạo 2 id random không trùng
        do {
            $data1ID = rand($min, $max);
        } while ($data1ID == $id);
        do {
            $data2ID = rand($min, $max);
        } while ($data2ID == $id || $data2ID == $data1ID);
// tạo 2 dữ liệu mẫu
        $data1 = DataSupport::find($data1ID);
        $data2 = DataSupport::find($data2ID);

// random không trùng đáp án ABC
        $lc1 = rand(1, 3);
        $lc2 = rand(1, 3);
        $lc3 = rand(1, 3);
        do {
            $lc2 = rand(1, 3);
        } while ($lc1 == $lc2);
        do {
            $lc3 = rand(1, 3);
        } while ($lc3 == $lc1 || $lc3 == $lc2);

        $listData[$lc1] = $main;
        $listData[$lc2] = $data1;
        $listData[$lc3] = $data2;

        $listDataM = array($listData[1], $listData[2], $listData[3]);
//        return $listData;
        return view('material-template.where-is-the', [
            'list' => $listDataM,
            'main' => $main,
            'next'=>$nextLink
        ]);
    }


    public function getMaterialView($id,$lc){
        $lesson = Lesson::all()->where('id',$id)->pluck('listMaterialId');
        $dataId = Lesson::where('id',$id)->first()->dataSupportId;
        $listMaterialId = explode(",", trim($lesson, '["]'));
        $nextLink = sprintf('/ls=%d/mt=%d', $id, $lc+1);
        switch ($listMaterialId[$lc-1]){
            case 1:
                return $this->whereIsThe($dataId,$nextLink);
                break;
//            case 2:
//                return $this->whatIsThis($main->id,$nextLink);
//                break;
            case 2:
                return $this->memoryGame($dataId,$nextLink);
                break;
            case 3:
                return $this->video($dataId,$nextLink);
                break;
            default:
                return 'null';
        }
    }

}
