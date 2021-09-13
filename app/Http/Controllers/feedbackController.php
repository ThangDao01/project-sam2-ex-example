<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedBackRequest;
use App\Models\Account;
use App\Models\FeedBack;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class feedbackController extends Controller
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
            return view('admin.FeedBack.list' , ['list' => FeedBack::paginate(10)]);
        } else {
            return $this->pathLogin();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createview()
    {
        //
        if ($this->authlogin()) {
            return view('admin.FeedBack.create');
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
    public function create(FeedBackRequest $request)
    {
        //
        $request->validated();
        $obj = new FeedBack();
        $obj->Name = $request->get('Name');
        $obj->Email = $request->get('Email');
        $obj->Message = $request->get('Message');
        $obj->Vote = $request->get('Vote');
        $obj->Seen = 0;
        $obj->save();
        return redirect()->back();
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

        $obj = FeedBack::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        return view('admin.feedback.edit', ['obj'=>$obj]);
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
            'Name' => 'required',
            'Email' => 'required',
            'Message' => 'required',
            'Vote' => 'required',
            'Seen' => 'required',
        ]);

        $obj = FeedBack::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        $obj->Name = $request->get('Name');
        $obj->Email = $request->get('Email');
        $obj->Message = $request->get('Message');
        $obj->Vote = $request->get('Vote');
        $obj->Seen = $request->get('Seen');
        $obj->save();
        return redirect('/admin/feedback/list');
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

        $obj = FeedBack::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('/admin/feedback/list');
    }
}
