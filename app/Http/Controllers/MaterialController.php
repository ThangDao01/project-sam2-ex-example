<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Models\Account;
use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.Material.list' , ['list' => Material::paginate(10)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMaterial($id,$lc)
    {
        //
        dd($id,$lc);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(MaterialRequest $request)
    {
        //
        $obj = new Material();
        $obj->materialName = $request->get('materialName');
        $obj->materialLocation = $request->get('materialLocation');
        $obj->listData = $request->get('listData');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('/admin/material/list');
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
        $obj = Material::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        return view('admin.material.edit', ['obj'=>$obj]);
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
        $request->validate([
            'materialName' => 'required',
            'materialLocation' => 'required',
            'listData' => 'required',
            'status' => 'required',
        ]);
        $obj = Material::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->materialName = $request->get('materialName');
        $obj->listData = $request->get('listData');
        $obj->materialLocation = $request->get('materialLocation');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('/admin/material/list');
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
        $obj = Material::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('/admin/material/list');

    }
}
