<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){



       // dd($request->all()); //display data
       $task = new Task;

       $this->validate($request,[
           /*name=task from input field*/ 'task'=>'required|max:100|min:5',

       ]);

       $task->/*table column*/task = $request->task;
       $task->save();

       $data = Task::all();
       //dd($data);

       return view('task')->with('tasks',$data);
       //return redirect()->back();
    }
   
}
