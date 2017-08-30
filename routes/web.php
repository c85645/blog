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
    // return view('welcome');
    return view('/index');
});

// 對任務操作CRUD
Route::resource('task','TaskController');

// 對文章操作CRUD
Route::resource('article', 'ArticleController');

// 分類操作CRUD
Route::resource('category', 'CategoryController');
