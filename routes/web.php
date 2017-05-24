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
    //return view('welcome');
    // ArrayList
    $members = [
		'Stream' => [
			'age' => 20,
			'gender' => 'male'
		],
		'Sid' => [
			'age' => 22,
			'gender' => 'male'
		],
		'Jessie' => [
			'age' => 18,
			'gender' => 'female'
		],
		'Jeff' => [
			'age' => 24,
			'gender' => 'male'
		],
		'Eli' => [
			'age' => 26,
			'gender' => 'male'
		]
    ];

	// for($i = 0 ; $i < count($members) ; $i++){
	// 　echo $members[$i];
	// }
	// echo count($members);

    // foreach 的用法 （前面放陣列，後面放陣列內的物件名）
    // $member . '<br>'   當中的 . 就是連接的意思
	foreach ($members as $member_name => $member_data) {
		echo $member_name.', 性別：' . $member_data['gender'] . ', 年齡：' . $member_data['age'] . '<br>';
	}
});

Route::get('/about', function(){
	echo "1";
	echo "2";
}); 