<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
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
    public function getLessonByCourse($id)
    {
        return view('material.lesson-view', ['listLesson' => Lesson::all()->where('courseId', $id)]);
    }

    public function userRegister(){
        return view('user.dangki');
    }

    public function Create(AccountRequest $request)
    {
        //
        $request->validated();
        $obj = new Account();
        $obj->FirstName = $request->get('FirstName');
        $obj->LastName = $request->get('LastName');
        $obj->Email = $request->get('Email');
        $obj->PasswordHash = $request->get('password');
        $obj->Age = $request->get('Age');
        $obj->Role = 1;
        $obj->Phone = $request->get('Phone');
        $obj->Status = 1;
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/login');
    }
}
