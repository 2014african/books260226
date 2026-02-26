<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
 Route::get('/create', [BookController::class, 'create']);
});

