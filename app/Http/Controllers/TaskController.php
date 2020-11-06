<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Yajra\datatables\Datatables;

class TaskController extends Controller
{
    public function index()
    {
        return view('datatables.index');
    }

    public function getTasks()
    {
        $tasks = Task::select(['id','name','description']);

        return DataTables::of($tasks)

            ->make(true);
    }
}
