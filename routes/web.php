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

Route::get('/', function () {
    return view('welcome');
});

//Resource admin
Route::group(['prefix'=>'admin'], function(){
	
	//Resource user
	Route::group(['prefix'=>'users'], function(){
		Route::get('list', 'UserController@index');

		Route::get('add', 'UserController@create');
		Route::post('add', 'UserController@store');

		Route::get('edit/{id}', 'UserController@edit');
		Route::post('edit/{id}', 'UserController@update');
	});
});

//Register, login, logout
Route::get('login', 'LogController@getLogin');
Route::post('login', 'LogController@Login');
Route::get('register', 'LogController@getRegister');
Route::post('register', 'LogController@Register');
Route::get('logout', 'LogControllerLogout');