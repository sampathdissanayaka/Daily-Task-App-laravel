<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});



Route ::get('/login',function(){
    echo "welcome to laravel!";
});

Route::get('/about','App\Http\Controllers\PagesController@indexaboutus');