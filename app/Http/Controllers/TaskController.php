<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('task.index');
    }

    public function get_tasks(){
        $tasks = Task::latest()->get();

        return response()->json($tasks);
    }
}
