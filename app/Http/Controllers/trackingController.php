<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class trackingController extends Controller
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
            return view('admin.tracking.list' , ['list' => Tracking::paginate(10)]);
        }else {
            return $this->pathLogin();
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {
        //
        if ($this->authlogin()) {
            return view('admin.tracking.create');
        }else {
            return $this->pathLogin();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $obj = Tracking::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy đối tượng']);
        }
        return view('admin.tracking.edit', ['obj'=>$obj]);
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
        $request->validate([]);
        $obj = Tracking::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy đối tượng']);
        }
        $obj->save();
        return redirect('/admin/tracking/list');
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
        $obj = Tracking::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy đối tượng']);
        }
        $obj->delete();
        return redirect('/admin/tracking/list');
    }
}
