<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\DataSupport;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.Account.list' , ['list' => Account::paginate(20)]);
    }
    public function loginView()
    {
        //

        return view('admin.Account.login' , ['list' => Account::paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerView()
    {
        //
        return view('admin.Account.register');
    }

    public function Create()
    {
        //

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
        $obj = Account::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        return view('admin.Account.edit', ['obj' => $obj]);
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
        $request->validate(
                    [
                    ]
                );
                $obj = Account::find($id);
                if ($obj == null){
                    return view('admin.error.404', ['msg'=>'không tìm thấy tin tức']);
                }

                return redirect('/admin/account/list');
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
        $obj = Account::find($id);
        if ($obj == null){
            return view('error.404',['msg'=> 'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('admin/account/list');
    }
}
