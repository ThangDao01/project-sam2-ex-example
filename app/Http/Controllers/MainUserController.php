<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class MainUserController extends Controller
{
    //
    public function getCourse(){
        $obj = Course::all();
        return view('user.banggia',[
            'listCourse' => $obj
        ]);
    }
    public function getLessonByCourse($id){
        return view('material.lesson-view' , ['listLesson' => Lesson::all()->where('courseId',$id)]);
    }
}
