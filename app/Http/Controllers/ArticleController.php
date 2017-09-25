<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    // 文章清單
    public function index()
    {
        // view指向 路徑--資料夾.檔名
        // with 帶有參數
        $keyword = request() -> input('keyword');

        if ($keyword == '') {
            $article = Article::get();
        } else {
            $article = Article::where('title', 'like', '%'.request()->input('keyword').'%')->get();
        }

        return view('article.index')->with([
            'rows' => $article,
            'keyword' => $keyword
        ]);
    }

    // // 列出文章內容
    // public function show($id)
    // {
    //     return view('article.show')->with([
    //         'article' => Article::find($id)
    //     ]);
    // }

    // 列出文章內容
    public function show(Article $article)
    {
        return view('article.show')->with([
            'article' => $article
        ]);
    }

    // 新增
    public function create()
    {
        return view('article.create');
    }

    // 儲存
    public function store()
    {
        // 原本寫法，指定欄位並接收
        // Article::create([
        //     'title' => request()->input('title'),
        //     'description' => request()->input('description')
        // ]);
        // 接收表單所有的資料，並在article table 新增一筆資料

        $this -> validate(request(), [
            'title' => 'required',
            'description' => 'required'
        ]);
        Article::create(request()->input());
        return redirect()->to('/article');
    }

    // 更新表單
    public function edit(Article $article)
    {
        // return view('article.edit')->with([
        //     'article' => $article
        // ]);
        // dd(request()->url());
        return view('article.edit')->with(compact('article'));
    }

    // 更新的方法
    public function update(Article $article)
    {
        // $article = Article::find($id);

        // $article->update([
        //     'title' => request()->input('title'),
        //     'description' => request('description')
        // ]);
        $this -> validate(request(), [
            'title' => 'required',
            'description' => 'required'
        ]);

        $article->update(request()->input());
        return redirect()->to('/article');
    }

    // 刪除方法
    public function destroy(Article $article)
    {
        // $article = Article::find($id);
        // $article->delete();

        // Article::destroy($id);

        $article->delete();

        return redirect()->to('/article');
    }
}
