<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/task',function(){
    $data = App\Models\Task::all();
    return view('task')->with('tasks',$data);
});

Route::post('/saveTask','App\Http\Controllers\TaskController@store');

Route::get('/markascompleted','App\Http\Controllers\TaskController@UpdateTaskAsCompleted');