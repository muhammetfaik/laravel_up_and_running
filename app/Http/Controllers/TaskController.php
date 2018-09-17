<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home()
    {
        return "Hello, World!" ;
    }

    public function index()
    {
        return view('task.index')
            ->with('tasks',Task::all());
    }
}


