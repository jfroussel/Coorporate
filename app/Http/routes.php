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

Route::get('/users', function(){
    return view('builder/coorporate/users');
});

Route::get('/support', function(){
    return view('builder/coorporate/support');
});

Route::get('/contact', function(){
    return view('builder/coorporate/contact');
});

Route::get('/help', function(){
    return view('builder/coorporate/help');
});

Route::get('/gestion-ventes', function(){
    return view('builder/dashboard');
});

Route::get('/profil', function(){
    return view('builder/customer/profil');
});

Route::get('/settings', function(){
    return view('builder/customer/settings');
});

Route::get('/try', function(){
   return view('builder/coorporate/try');
});
Route::get('/builder', ['middleware' => 'auth', function() {
    return view('builder');
}]);




