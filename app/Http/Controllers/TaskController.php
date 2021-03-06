<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->where('name', 'like', 'Task 2%')->get();
        //return $tasks;
        return view('Tasks.index', compact('tasks'));
    }
    public function show($id)
    {
        $task = DB::table('tasks')->find($id);
        return view('Tasks.contact', compact('task'));
    }
}
