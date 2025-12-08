<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('template.default');
    return view('html101');
});
Route::get('/views2', function () {
    //return view('template.default');
    return view('myviews');
});
