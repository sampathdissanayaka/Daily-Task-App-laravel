<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){

       // dd($request->all()); //display data
       $task = new Task;
       $task->/*table column*/task = $request->task;
       $task->save();
       return redirect()->back();
    }
   
}
