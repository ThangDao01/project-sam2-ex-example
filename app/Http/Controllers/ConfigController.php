<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obj = Config::find(1);
        return view('admin.Config.viewConfig',[
            'config'=>$obj,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function Contactus(){
        $obj = Config::find(1);
        return view('user.ContactUs',[
            'config'=>$obj,
        ]);

    }
    public function AboutUs(){
        $obj = Config::find(1);
        return view('user.about-us',[
            'config'=>$obj,
        ]);

    }
    public function Policy(){
        $obj = Config::find(1);
        return view('user.policy',[
            'config'=>$obj,
        ]);

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        //
        $obj = Config::find(1);
        $obj->contactUs=$request->get('contactUs');
        $obj->aboutUs=$request->get('aboutUs');
        $obj->policyPage=$request->get('policyPage');
        $obj->titlePage =$request->get('titlePage');
        $obj->descriptionPage=$request->get('descriptionPage');
        $obj->keywordPage=$request->get('keywordPage');
        $obj->save();
        return redirect('/admin/config');
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

    }
}
