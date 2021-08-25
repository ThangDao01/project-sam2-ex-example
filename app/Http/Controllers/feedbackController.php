<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedBackRequest;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.FeedBack.list' , ['list' => FeedBack::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createview()
    {
        //
        return view('admin.FeedBack.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(FeedBackRequest $request)
    {
        //
        $request->validated();
        $obj = new FeedBack();
        $obj->accountId = $request->get('AccountID');
        $obj->message = $request->get('Message');
        $obj->vote = $request->get('Vote');
        $obj->seen = $request->get('Seen');
        $obj->save();
        return redirect('/admin/feedback/list');
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
            'AccountID' => 'required',
            'Message' => 'required',
            'Vote' => 'required',
            'Seen' => 'required',
        ]);

        $obj = FeedBack::find($id);
        if ($obj == null) {
            return view('error.404', ['msg' => 'không tìm thấy tin tức']);
        }
        $obj->accountId = $request->get('AccountID');
        $obj->message = $request->get('Message');
        $obj->vote = $request->get('Vote');
        $obj->seen = $request->get('Seen');
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
