<?php

namespace App\Http\Controllers;

use App\Http\Requests\courseRequest;
use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class courseController extends Controller
{


    public function index(){
        parent::index();
        if ($this->authlogin()) {
            return view('admin.course.list', ['list' => Course::paginate(10)]);

        } else {
            return $this->pathLogin();
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testCheckbox(Request $request){
        $checkbox = $request->get('checkbox');
        return $checkbox;

    }


    public function createview()
    {
        if ($this->authlogin()) {
            return view('admin.course.create', ['list' => Lesson::all()]);
        } else {
            return $this->pathLogin();
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */


    public function create(Request $request)
    {
        //
//        return $obj->id;
//        $request-validated();
        $obj = new Course();
        $obj->name = $request->get('name');
        $obj->Price = $request->get('Price');
        $obj->Description = $request->get('Description');
        $obj->timeFinish = $request->get('timeFinish');
        $obj->listLessonId = $request->get('listLessonId');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->Status = $request->get('Status');
        $obj->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $obj->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
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
        parent::index();
        $obj = Course::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'']);
        }
        return view('admin.Course.edit', ['obj'=>$obj] , ['list' => Lesson::all()]);
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
                'thumbnail' => 'required',
                'timeFinish' => 'required',
                'lesson' => 'required',
                'Status' => 'required',
            ]
        );
        $obj = Course::find($id);
        if ($obj == null){
            return view('admin.error.404', ['msg'=>'kh??ng t??m th???y tin t???c']);
        }
        $obj->course = $request->get('course');
        $obj->Price = $request->get('Price');
        $obj->Description = $request->get('Description');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->timeFinish = $request->get('timeFinish');
        $obj->lesson = $request->get('lesson');
        $obj->Status = $request->get('Status');
        $obj->save();
        return redirect('/admin/course/list' );
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
        parent::index();
        $obj = Course::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=> 'kh??ng t??m th???y tin t???c']);
        }
        $obj->delete();
        return redirect('/admin/course/list');
    }
}
