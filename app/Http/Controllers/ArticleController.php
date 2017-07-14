<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    // 文章清單
    public function index()
    {
    	$articles = Article::get();
		
    	// view指向 路徑--資料夾.檔名 
    	// with 帶有參數
    	return view('article.index')->with([
    		'rows' => $articles
    	]);
    }

    // 列出文章內容
    public function show($id)
    {
    	$article = Article::find($id);

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
        Article::create([
            'title' => request()->input('title'),
            'description' => request('description')
        ]);

        return redirect()->to('/article');
    }
}
