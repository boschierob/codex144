<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Assure-toi que cette partie est bien présente
Route::get('/preview/{name}', function ($name) {
    if (view()->exists('imported.' . $name)) {
        return view('imported.' . $name);
    }

    // Si elle n'existe pas, on redirige vers l'accueil (ou index_site)
    return redirect()->route('home'); 
});

// Ta route home (nommée pour que la redirection fonctionne)
Route::get('/accueil', function () {
    return view('imported/index_site');
})->name('home');

// Assure-toi que cette partie est bien présente
Route::get('/elpis_360', function () {
    return view('imported.elpis_360'); 
})->name('elpis.index');

Route::fallback(function () {
    return view('imported.index_site'); 
});