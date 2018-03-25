<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    public function show(Task $task) //Task::find($id);
    {
        return view('tasks.show', compact('task'));
    }
}
