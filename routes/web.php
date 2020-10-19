<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/task',function(){
    return view('task');
});

Route::post('/saveTask','App\Http\Controllers\TaskController@store');