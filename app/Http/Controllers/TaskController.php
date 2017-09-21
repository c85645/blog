<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        // 2017.09.01 Update 查詢功能，若有輸入keyword的話就搜尋keyword，若沒有輸入則顯示全部
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
        $this -> validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        Task::create(request()->input());
        return redirect()->to('/task');
    }

    public function edit(Task $task)
    {
        return view('task.edit')->with(compact('task'));
    }

    public function update(Task $task)
    {
        $this -> validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        $task->update(request()->input());
        return redirect()->to('/task');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->to('/task');
    }
}
