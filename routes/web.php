<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!  `
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('/index');
});

Route::group(['middleware' => 'auth'], function () {
    // 對任務操作CRUD
    Route::resource('task', 'TaskController');

    // 對文章操作CRUD
    Route::resource('article', 'ArticleController');

    // 分類操作CRUD
    Route::resource('category', 'CategoryController');
});


// 登入頁GET Request
Route::get('login', ['as' => 'login', 'uses' => 'LoginController@showLoginForm']);

// 登入認證
Route::post('login', 'LoginController@authenticate');

// 登出
Route::post('logout', 'LoginController@logout');
