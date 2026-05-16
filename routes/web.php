<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Assure-toi que cette partie est bien présente
Route::get('/preview/{name}', function ($name) {
    return view('imported.' . $name);
});