<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/hello','hello');

Route::get('/hello',function(){
    return view('hello');
})->name('ranjan');