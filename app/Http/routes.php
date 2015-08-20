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
    return view('welcome');
});


Route::get('/main', function () {
    return view('mainpage');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/single', function () {
    return view('singleimage');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
]);

Route::get('home/purchased/{id}', [
	'uses' => 'PurchasedShow@show'	
]);

Route::post('home/pay', [
	'uses' => 'PaymentController@postBuy'
]);