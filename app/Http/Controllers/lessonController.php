<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRequest;
use App\Models\DataSupport;
use App\Models\Lesson;
use Illuminate\Http\Request;

class lessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.Lesson.list', ['list' => Lesson::paginate(10)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createview()
    {
        //
        return view('admin.Lesson.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(LessonRequest $request)
    {
        $request->validated();
        $obj = new Lesson();
        $obj->lesson_name = $request->get('LessonName');
        $obj->CourseId = $request->get('CourseId');
        $obj->ListMaterialId = $request->get('ListMaterialId');
        $obj->DataSupportValues = $request->get('DataSupportValues');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('admin/lesson/list');
        //
    }

    public function autoCreateLesson($id, $key)
    {
        $list = DataSupport::all()->where('key',$key);
        return view('material.lesson', [
            'list' => $list,
            'id' => $id
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Lesson::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        return view('admin.lesson.edit', ['obj' => $obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
                'LessonName' => 'required',
                'CourseId' => 'required',
                'ListMaterialId' => 'required',
                'DataSupportValues' => 'required',
                'Status' => 'required',
            ]
        );
        $obj = Lesson::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        $obj->lesson_name = $request->get('LessonName');
        $obj->CourseId = $request->get('CourseId');
        $obj->ListMaterialId = $request->get('ListMaterialId');
        $obj->DataSupportValues = $request->get('DataSupportValues');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('admin/lesson/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Lesson::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('admin/lesson/list');
    }
}
