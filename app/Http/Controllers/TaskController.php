<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); 
        return view('tasks.index',[
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['string','required', 'min:1', 'max:25'],
        ]);

        $inputs = $request->all();
        // dd($inputs);
        $task = Task::create($inputs);

        return redirect('/');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit',[
            'task' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => ['string','required', 'min:1', 'max:25'],
        ]);
        $inputs = $request->all();
        
        $task->update($inputs);

        return redirect()->back();
    }

    public function destroy(Task $task)
    { 
        $task = Task::findOrFail($task->id);
        $task->delete();
        return redirect()->back();
    }
}
