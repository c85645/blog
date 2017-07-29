<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
    	return view('task.index')->with([
    		'rows' => Task::get()
    	]);
    }

    public function show(Task $task)
    {
    	return view('task.show')->with([
    		'task' => $task
    	]);
    }

    public function create()
    {
    	return view('task.create');
    }

    public function store()
    {
    	Task::create(request()->input());
    	return redirect()->to('/task');
    }

    public function edit(Task $task)
    {
    	return view('task.edit')->with(compact('task'));
    }

    public function update(Task $task)
    {
    	$task->update(request()->input());
    	return redirect()->to('/task');
    }

    public function destroy(Task $task)
    {
    	$task->delete();
    	return redirect()->to('/task');
    }
}
