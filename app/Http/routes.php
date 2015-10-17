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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('mainpage');
});

Route::get('/cart', [
    	'uses' => 'CartController@index'
]);

Route::post('/cart/add', [
	'uses' => 'CartController@store'
]);

Route::get('/cart/remove/{id}', [
	'uses' => 'CartController@destroy'
]);

Route::post('/cart/update/{id}', [
	'uses' => 'CartController@update'
]);

Route::get('/cart/clear', [
	'uses' => 'CartController@clearCart'
]);

Route::post('/payment', [
	'uses' => 'PaymentController@postBuy'
]);

Route::get('/payment/executePayment', [
	'uses' => 'PaymentController@executePayment'
]);

Route::get('/gallery', [
    	'uses' => 'ProductController@index'
]);

Route::group(['prefix' => 'category'], function(){
	Route::get('/', function(){
		
	});
});

Route::get('/single', function () {
    return view('singleimage');
});

Route::controllers([
	'user' => 'Auth\AuthController',
]);

Route::get('/home', [
	'uses' => 'PurchasedShow@show'	
]);


Route::get('/addRoles', function(){
	$owner = new \App\Role;
	$owner->name         = 'Administrator';
	$owner->display_name = 'Administrator'; // optional
	$owner->description  = 'System Administrator'; // optional
	$owner->save();

	$admin = new \App\Role;
	$admin->name         = 'Member';
	$admin->display_name = 'Member'; // optional
	$admin->description  = 'Store User'; // optional
	$admin->save();

	$owners = new \App\Role;
	$owners->name         = 'VIP';
	$owners->display_name = 'VIP Member'; // optional
	$owners->description  = 'VIP Level User'; // optional
	$owners->save();

	$admins = new \App\Role;
	$admins->name         = 'SVIP';
	$admins->display_name = 'Super VIP Member'; // optional
	$admins->description  = 'Super VIP User'; // optional
	$admins->save();

	return "done";
});

Route::get('/addAdminUser', function(){

	$user = \App\User::where('email', '=', 'SharkIng@Shacas.com')->first();

	// role attach alias
	$user->attachRole('1'); // parameter can be an Role object, array, or id

	return "done";
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {

	Route::get('/', function(){
		return view('admin.index');
	});

	Route::get('/addUser', function(){
		
	});
	Route::get('/editUser', function(){
		
	});
	Route::get('/manageUsers', function(){
		return "Hello World";
	});

	Route::get('/addRole', function(){
		
	});
	Route::get('/editRole', function(){
		
	});

	Route::get('/addProduct', function(){
		return view('admin.products.addProducts');
		
	});
	Route::get('/viewProducts', function(){
		$products = \App\Product::get();
       		return view('admin.products.listProducts', compact('products'));
	});

	Route::post('/products/add', [
		'uses' => 'ProductController@store'
	]);
	Route::get('/products/edit/{id}', [
		'uses' => 'ProductController@edit'
	]);
	Route::post('/products/update/{id}', [
		'as' => 'products.update',
		'uses' => 'ProductController@update'
	]);
	Route::get('/products/remove/{id}', [
		'uses' => 'ProductController@destroy'
	]);

	Route::get('/addCategory', function(){
		
	});
	Route::get('/editCategory', function(){
		
	});

	Route::get('/orderList', function(){
		return "Hello World";
	});

});