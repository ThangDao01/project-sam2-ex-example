<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataSupportRequest;
use App\Models\DataSupport;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.data.list', ['list' => DataSupport::paginate(10)]);
    }
    public function testSeed(){
        $data = null;
        if (Session::has('dataSupport')) {
            $data = Session::get('dataSupport');
        } else {
            $data = [];
        }
        return view('admin.data.result', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {
        return view('admin.data.create');
    }
    public function seedProMax(){
        return view('admin.data.result-seed', ['list' => DataSupport::all()]);
    }
//    public function create(Request $request)
    public function create(DataSupportRequest $request)
    {
        //

        $request->validated();
        $obj = new DataSupport();
        $obj->values = $request->get('values');
        $obj->color = $request->get('color');
        $obj->words = $request->get('words');
        $obj->video = $request->get('video');
        $obj->voice = $request->get('voice');
        $obj->images = $request->get('images');
        $obj->key = $request->get('key');
<<<<<<< HEAD
        $obj->createBy = 'hungpvth2008007@fpt.edu.vn';
=======
        $obj->createBy = 'hoadvth2009007@fpt.edu.vn';
>>>>>>> ea1636b328d34475426e9c63cd628aedb1eb3eda
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/data-support/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $obj = DataSupport::find($id);
        if ($obj == null){
            return view('admin.error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        return view('admin.data.edit', ['obj'=>$obj]);
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
        $request->validate(
            [
                'values' => 'required',
                'color' => 'required',
                'words_en' => 'required',
                'video' => 'required',
                'voice_en' => 'required',
                'images' => 'required',
                'key' => 'required'
            ]
        );
        $obj = DataSupport::find($id);
        if ($obj == null){
            return view('admin.error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->values = $request->get('values');
        $obj->color = $request->get('color');
        $obj->words_en = $request->get('words_en');
        $obj->video = $request->get('video');
        $obj->voice_en = $request->get('voice_en');
        $obj->images = $request->get('images');
        $obj->key = $request->get('key');
        $obj->save();
        return redirect('/admin/data-support/list');
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
        $obj = DataSupport::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('/admin/data-support/list');
    }
}
