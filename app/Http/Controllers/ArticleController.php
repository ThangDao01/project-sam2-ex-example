<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
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
            return view('admin.Article.list' , ['list' => Article::paginate(10)]);
        }else {
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
            return view('admin.Article.create');
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
    public function create(ArticleRequest $request)
    {
        //
        $request->validated();
        $obj = new Article();
        $obj->url = $request->get('url');
        $obj->title = $request->get('title');
        $obj->categories = $request->get('categories');
        $obj->Detail = $request->get('Detail');
        $obj->Author = $request->get('Author');
        $obj->save();
        return redirect('/admin/article/list');
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
        parent::index();

        $obj = Article::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        return view('admin.Article.edit', ['obj' => $obj]);
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
            'title'=>'required',
            'Detail'=>'required',
            'AuthorId'=>'required',
        ]
        );
        $obj = Article::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->title = $request->get('title');
        $obj->Detail = $request->get('Detail');
        $obj->AuthorId = $request->get('AuthorId');
        $obj->save();
        return redirect('/admin/article/list');
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
        parent::index();

        $obj = Article::find($id);
        if ($obj == null){
            return view('error.404', ['msg'=>'không tìm thấy tin tức']);
        }
        $obj->delete();
        return redirect('admin/article/list');
    }
}
