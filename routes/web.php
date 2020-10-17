<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function() {
    return view('aboutus');
});

Route ::get('/login',function(){
    echo "welcome to laravel!";
});

Route::get('/contact',function(){
     return view('contactus');
});