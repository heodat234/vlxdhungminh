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
Route::get('ViewProductByType_Admin/{id}',
	['as'=>'ViewProductByType_Admin',
	'uses'=>'Admin_Controller@FindProductByType']);

Route::get('Edit_Product/{id}/{name}/{desc}/{unit_price}/{pro_price}/{image}/{unit}',
	['as'=>'Edit_Product',
	 'uses'=>'Admin_Controller@Edit_Product']);
Route::get('Insert_Product/{name}/{type}/{desc}/{unit_price}/{pro_price}/{image}/{unit}',
	['as'=>'Insert_Product',
	 'uses'=>'Admin_Controller@Insert_Product']);
Route::get('Delete_Product/{id}',
	['as'=>'Delete_Product',
	 'uses'=>'Admin_Controller@Delete_Product']);

Route::get('user_Admin',
	['as'=>'user_Admin',
	 'uses'=>'Admin_Controller@Select_User']);
Route::get('Edit_User/{id}/{group}',
	['as'=>'Edit_User',
	 'uses'=>'Admin_Controller@Edit_User']);
Route::get('Insert_User/{name}/{email}/{group}',
	['as'=>'Insert_User',
	 'uses'=>'Admin_Controller@Insert_User']);
Route::get('Delete_User/{id}',
	['as'=>'Delete_User',
	 'uses'=>'Admin_Controller@Delete_User']);


Route::get('Bill_Admin',
	['as'=>'Bill_Admin',
	 'uses'=>'Admin_Controller@Select_Bill']);


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
