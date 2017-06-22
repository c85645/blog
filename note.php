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

	// $me = new stdClass();
	// $me = 'age' => 16;
	// $me = 'gender' => 'male';

	// echo dd($me);


	$me2 = [
		'age' => 16,
		'gender' => 'male'
	];

	return dd($me2);

    //return view('welcome');
    // ArrayList
	//   $members = [
			// 'Stream' => [
			// 	'age' => 20,
			// 	'gender' => 'male'
			// ],
			// 'Sid' => [
			// 	'age' => 22,
			// 	'gender' => 'male'
			// ],
			// 'Jessie' => [
			// 	'age' => 18,
			// 	'gender' => 'female'
			// ],
			// 'Jeff' => [
			// 	'age' => 24,
			// 	'gender' => 'male'
			// ],
			// 'Eli' => [
			// 	'age' => 26,
			// 	'gender' => 'male'
			// ]
	//   ];

	// for($i = 0 ; $i < count($members) ; $i++){
	// 　echo $members[$i];
	// }
	// echo count($members);

    // foreach 的用法 （前面放陣列，後面放陣列內的物件名）
    // $member . '<br>'   當中的 . 就是連接的意思
	// foreach ($members as $member_name => $member_data) {
	// 	echo $member_name.', 性別：' . $member_data['gender'] . ', 年齡：' . $member_data['age'] . '<br>';
	// }
});


function checkRemainderOfNumber($number){
	$remainder = $number % 2;

	if ($remainder == 0){
		return $number . '是偶數';
	} else{
		return $number . '是奇數';
	}
	return;
}

function sumOfNumbers($arr_numbers){
	$start_value = 0;

	foreach ($arr_numbers as $number){
		$start_value += $number;
	}
	return $start_value;
} 

Route::get('/function_practice',function(){
	$number = [1, 2, 3, 4, 5];

	echo sumOfNumbers($number);

	//有2個偶數
});

Route::get('/about',function(){
	$tasks = [
		'起床',
		'刷牙',
		'洗臉',
		'上班',
		'耍廢',
		'午餐',
		'下班',
		'影片',
		'睡覺'
	];

	return view('about',compact('tasks'));
});

// Route::get('/function_homework',function(){
// 	echo countOfDay();
// });

// function countOfDay(){
// 	$days = 0;

// 	for($i = 1000; $i > 50; $i /= 2){
// 		$days += 1;
// 	}
// 	echo $days;
// }


