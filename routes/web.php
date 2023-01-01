<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/nouveau', function () {
    return ('Please wait...');
})->name('nouveau');

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/edit/{editeur}', function ($editeur) {
    return ('Edited by '.$editeur);
})->name('rediriger')->where('editeur','[a-z]{3,10}');

Route::redirect('/nouveau', '/accueil');

/* affichage des route => php artisan route:list*/

Route::fallback(function () {
    return view('erreur');
    });