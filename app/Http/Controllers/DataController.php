<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataSupportRequest;
use App\Models\DataSupport;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        parent::index();
        if ($this->authlogin()) {
            return view('admin.data.list', ['list' => DataSupport::paginate(10)]);
        } else {
            return $this->pathLogin();
        }
    }


    public function voice($id)
    {
        $obj = DataSupport::find($id);
        $lc1 = rand(1, 3);
        $lc2 = rand(1, 3);
        $lc3 = rand(1, 3);
        do {
            $lc2 = rand(1, 3);
        } while ($lc1 == $lc2);
        do {
            $lc3 = rand(1, 3);
        } while ($lc3 == $lc1 || $lc3 == $lc2);
        dd($lc1, $lc2, $lc3);
    }

    public function testSeed()
    {
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
        if ($this->authlogin()) {
            return view('admin.data.create');
        } else {
            return $this->pathLogin();
        }
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
        $obj->createBy = 'hoadvth2009007@fpt.edu.vn';
        $obj->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $obj->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
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
        parent::index();

        $obj = DataSupport::find($id);
        if ($obj == null){
            return view('admin.error.404', ['msg'=>'kh??ng t??m th???y tin t???c']);
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
            return view('admin.error.404', ['msg'=>'kh??ng t??m th???y tin t???c']);
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
        parent::index();
        $obj = DataSupport::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'kh??ng t??m th???y tin t???c']);
        }
        $obj->delete();
        return redirect('/admin/data-support/list');
    }
}
