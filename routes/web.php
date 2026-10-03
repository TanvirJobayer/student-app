<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\Redirect;

Route::get('/phpmyadmin', function () {
    return Redirect::to('http://127.0.0.1:8080');
});
