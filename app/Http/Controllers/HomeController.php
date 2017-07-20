<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$name = 'Jeff';
    	$age = 23;

    	$tasks = Task::get();

    	return view('task.index')->with([
    		'rows' => $tasks
    	]); 
    }
}
