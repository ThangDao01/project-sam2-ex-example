<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Models\Account;
use App\Models\DataSupport;

use App\Models\Course;
use App\Models\Material;
use App\Models\Tracking;
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
        parent::index();
        if ($this->authlogin()) {
            return view('admin.Material.list', ['list' => Material::paginate(10)]);
        } else {
            return $this->pathLogin();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMaterial($id, $lc)
    {
        //
        dd($id, $lc);
    }

    public function createView()
    {
        if ($this->authlogin()) {
            return view('admin.Material.create');
        } else {
            return $this->pathLogin();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Material::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        return view('admin.material.edit', ['obj' => $obj]);
    }


}
