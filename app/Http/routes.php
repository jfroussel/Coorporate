<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/produit', function () {
    return view('produit');
});

Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/builder', ['middleware' => 'auth', function() {
    return view('builder');
}]);




