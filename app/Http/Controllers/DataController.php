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
        return view('admin.data.list', ['list' => DataSupport::paginate(20)]);
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

    public function create(DataSupportRequest $request)
    {
        //

        $request->validated();
        $obj = new DataSupport();
        $obj->values = $request->get('values');
        $obj->words_vi = $request->get('words_vi');
        $obj->words_en = $request->get('words_en');
        $obj->voice_vi = $request->get('voice_vi');
        $obj->voice_en = $request->get('voice_en');
        $obj->images = $request->get('images');
        $obj->key = $request->get('key');
        $obj->createBy = 0;
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        Session::put('dataSupport', $obj);
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
    }
}
