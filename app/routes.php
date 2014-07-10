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

Route::resource('users', 'UserController');
// Route::get('/header-home',function(){
// 	return View::make('template.header-home');
// });
Route::get('/header-home',function(){
	return View::make('template.header-home');
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
Route::get('/review', function(){
	return View::make('tap-vendor.Review');
});
Route::get('/hellooo',function(){
	return View::make('hellooo');
});