<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    //return ('this is about page');
    return view('about', ['name'=> 'about']);
});
Route::get('/product', function () {
    //return ('this is product page');
    return view ('product', ['name' => 'shoes']);
});
Route::get('/portfolio', function () {
    return view ('portfolio');
});

Route::get('name/{name}', function($name) {
    return ('My name is '. $name);
});
Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'User ' . $name;
});
