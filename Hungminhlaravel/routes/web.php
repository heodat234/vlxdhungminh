<?php

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


 Route::get('/','Home_Controller@getIndex');
Route::get('ViewContent_Admin',
	['as'=>'ViewContentAdmin',
	'uses'=>'Admin_Controller@ViewContent_Admin']);
Route::get('ViewProduct_Admin',
	['as'=>'ViewProductAdmin',
	'uses'=>'Admin_Controller@Select_Product']);




Route::get('home',[
	'as'=>'home',
	'uses'=>'Home_Controller@getIndex'
		]);
Route::get('detail',[
	'as'=>'detail',
	'uses'=>'Product_Controller@ShowDetail']);
Route::get('Login',[
	'as'=>'Login',
	'uses'=>'LoginLogoutRegister_Controller@Login']);
Route::get('register',[
	'as'=>'register',
	'uses'=>'LoginLogoutRegister_Controller@Register']);
Route::get('Info',
	['as'=>'info',
	 'uses'=>'Home_Controller@info']);
Route::get('news',
	['as'=>'news',
	 'uses'=>'Home_Controller@news']);
Route::get('contact',
	['as'=>'contact',
	 'uses'=>'Home_Controller@contact']);