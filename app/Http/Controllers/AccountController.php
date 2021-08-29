<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use App\Models\DataSupport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('admin.Account.list' , ['list' => Account::paginate(10)]);
    }
    public function loginView(Request $request)
    {
        //


        return view('admin.Account.login' , ['list' => Account::paginate(10)]);
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

    public function Create(AccountRequest $request)
    {
        //
        $request->validated();
        $obj = new Account();
        $obj->FirstName = $request->get('FirstName');
        $obj->LastName = $request->get('LastName');
        $obj->Email = $request->get('Email');
        $obj->PasswordHash = $request->get('PasswordHash');
        $obj->Age = $request->get('Age');
        $obj->Role = $request->get('Role');
        $obj->Phone = $request->get('Phone');
        $obj->Status = 1;
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/account/list');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
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
        return view('admin/account/list');
    }
}
