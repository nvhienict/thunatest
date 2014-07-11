<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('login', array("as"=>"login","uses" =>"UserController@getLogin"));

Route::post('login',array("as"=>"login","uses"=>"UserController@postLogin"));

Route::resource('users', 'UserController');
// Route::get('/header-home',function(){
// 	return View::make('template.header-home');
// });
Route::get('/header-home',function(){
	return View::make('template.header-home');
});
Route::get('/header-home1',function(){
	return View::make('template.header-home1');
});
Route::get('/menu',function(){
	return View::make('template.menu');
});
Route::get('/footer',function(){
	return View::make('template.footer');
});

Route::get('/detail-vendor', function(){
	return View::make('template.detail');
});
Route::get('/khung', function(){
	return View::make('template.khung');
});
Route::get('/hellooo',function(){
	return View::make('hellooo');
});
Route::get('/review',function(){
	return View::make('template.reviews');
});
Route::get('login', array("as"=>"login","uses" =>"UserController@getLogin"));

Route::post('login',array("as"=>"login","uses"=>"UserController@postLogin"));

Route::get('register',array("as"=>"register","uses"=>"UserController@getRegister"));

Route::post('register',array("as"=>"register","uses"=>"UserController@postRegister"));

Route::get('logout',array("as"=>"logout","uses"=>"UserController@getLogout"));

Route::get("login-admin",array("prefix" => "admin","as"=>"login-admin","uses"=>"UserController@getLogin_admin"));

Route::post("login-admin",array("as"=>"login-admin","prefix" => "admin","uses"=>"UserController@postLogin_admin"));

Route::group(array("prefix" => "admin","before"=>"checkLogin"),function(){

	Route::get("logout-admin",array("prefix" => "admin","as"=>"logout-admin","uses"=>"UserController@getLogout_admin"));

	Route::get("home-page-admin",array("as"=>"home-page-admin","uses"=>"VendorsController@index"));

	Route::get("add-vendor",array("as"=>"add-vendor","uses"=>"VendorsController@create"));

	Route::post("add-vendor",array("as"=>"add-vendor","uses"=>"VendorsController@store"));

	Route::get("edit-vendor/{id}",array("as"=>"edit-vendor","uses"=>"VendorsController@edit"));

	Route::post("edit-vendor/{id}",array("as"=>"edit-vendor","uses"=>"VendorsController@update"));

	Route::get("delete-vendor/{id}",array("as"=>"edit-vendor","uses"=>"VendorsController@destroy"));
});
Route::filter("checkLogin",function(){
	if(!Session::has('email')){
		return Redirect::to('admin/login-admin');
	}
});

Route::resource('users', 'UserController');
// Route::get('/header-home',function(){
// 	return View::make('template.header-home');
// });
Route::get('/header-home',function(){
	return View::make('template.header-home');
});
Route::get('/header-home1',function(){
	return View::make('template.header-home1');
});
Route::get('/menu',function(){
	return View::make('template.menu');
});
Route::get('/footer',function(){
	return View::make('template.footer');
});

Route::get('/detail-vendor', function(){
	return View::make('template.detail');
});
Route::get('/khung', function(){
	return View::make('template.khung');
});
Route::get('/hellooo',function(){
	return View::make('hellooo');
});
Route::get('/review',function(){
	return View::make('template.reviews');
});
