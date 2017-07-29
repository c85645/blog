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

// 對任務操作CRUD
Route::resource('task','TaskController');

// 對文章操作CRUD
Route::resource('article', 'ArticleController');

// 文章列表
// Route::get('article', 'ArticleController@index');

// 新增
// Route::get('article/create', 'ArticleController@create');

// 儲存
// Route::post('article', 'ArticleController@store');

// 更新標單
// Route::get('article/{article}/edit','ArticleController@edit');

// 更新的Action
// Route::put('article/{article}', 'ArticleController@update');

// 刪除
// Route::delete('article/{article}', 'ArticleController@destroy');

// 文章內容 
// Route::get('article/{article}', 'ArticleController@show');




