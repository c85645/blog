<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::get();
		
    	// 資料夾.檔名 
    	return view('article.index')->with([
    		'rows' => $articles
    	]);
    }

    public function show($id)
    {
    	$article = Article::find($id);

    	return view('article.show')->with([
    		'article' => $article
    	]);
    }
}
