<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\DataSupport;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\String_;

class MainAdminController extends Controller
{
    //
    public function countUser()
    {
        return DB::table('accounts')->count();
    }

    public function countDataSupport()
    {
        return DB::table('data_supports')->count();
    }

    public function countCourse()
    {
        return DB::table('courses')->count();
    }

    public function countLesson()
    {
        return DB::table('lessons')->count();
    }

    public function listLesson()
    {
        return Lesson::all();
    }

    public function listKey()
    {
        return DB::table('data_supports')
            ->select('key')
            ->distinct()->get();
    }

    public function testLinhTinh()
    {
        $listLessonId = explode(",", trim('1,2,3,4,5', '["]'));
        if (in_array("2", $listLessonId)){
            return 2;
        }
        return $listLessonId;
    }
}
