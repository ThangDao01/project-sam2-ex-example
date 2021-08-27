<?php

namespace App\Http\Controllers;

use App\Http\Requests\courseRequest;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return view('admin.course.list' , ['list' => Course::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createview()
    {
        //
        return view('admin.course.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(courseRequest $request)
    {
        //
        $request->validated();
        $obj = new Course();
        $obj->course = $request->get('course');
        $obj->Price = $request->get('Price');
        $obj->Description = $request->get('Description');
        $obj->timeFinish = $request->get('timeFinish');
        $obj->Status = $request->get('Status');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/course/list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Course::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'']);
        }
        return view('admin.Course.edit', ['obj'=>$obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
                'course' => 'required',
                'Price' => 'required',
                'Description' => 'required',
                'timeFinish' => 'required',
                'Status' => 'required',
            ]
        );
        $obj = Course::find($id);
        if ($obj == null){
            return view('admin.error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->course = $request->get('course');
        $obj->Price = $request->get('Price');
        $obj->Description = $request->get('Description');
        $obj->timeFinish = $request->get('timeFinish');
        $obj->Status = $request->get('Status');
        $obj->save();
        return redirect('/admin/course/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Course::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=> 'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('/admin/course/list');
    }
}
