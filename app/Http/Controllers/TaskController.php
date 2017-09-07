<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        // return view('task.index')->with([
        //  'rows' => Task::get()
        // ]);

        // 2017.09.01 Update
        $keyword = request()->input('keyword');

        if ($keyword == '') {
            $task = Task::get();
        } else {
            $task = Task::where('name', 'like', '%'.request()->input('keyword').'%')->get();
        }

        // 若要多回傳值的話，就要用陣列的key value方式回傳
        return view('task.index')->with([
            'rows' => $task,
            'keyword' => $keyword
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
