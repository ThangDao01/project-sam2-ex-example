<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\DataSupport;
use App\Models\Lesson;
use Illuminate\Http\Request;

class MainUserController extends Controller
{
    //


    public function whatIsThis($id)
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
            'main' => $main
        ]);
    }
    public function listening($id)
    {
        $main = DataSupport::find($id);

        return view('material-template.listening', [
            'main' => $main
        ]);
    }
    public function video($id)
    {
        $main = DataSupport::find($id);
        return view('material-template.video', [
            'main' => $main
        ]);
    }

    public function whereIsThe($id)
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
            'main' => $main
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
        return view('material.lesson-view', ['listLesson' => Lesson::all()->where('courseId', $id)]);
    }

    public function getMaterialView($id,$lc){
        $lesson = Lesson::all()->where('id',$id);
        $lesson->listMaterialId = 1;
        $main = DataSupport::find($lesson->listMaterialId);
        switch ($lc){
            case 1:
                return $this->whatIsThis($main->id);
                break;
            case 2:
                return $this->whereIsThe($main->id);
                break;
            case 3:
                return $this->video($main->id);
                break;
            case 4:
                return $this->listening($main->id);
                break;
            default:
                return 'null';
        }
    }
}
