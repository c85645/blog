<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('/index');
});

// 文章列表
Route::get('article', 'ArticleController@index');

// 新增
Route::get('article/create', 'ArticleController@create');

// 文章內容 
Route::get('article/{id}', 'ArticleController@show');

// 儲存
Route::post('article', 'ArticleController@store');
