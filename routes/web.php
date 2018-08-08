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




Route::get('/home', 'HomeController@index')->name('home');
Route::post('image/store', 'ImageController@store')->name('image.store');
Route::post('saveimage', 'ImageController@guardarImagen')->name('guardaimagen');

Route::get('/', function() {
	return view('welcome');
});


Route::group(['middleware' => ['role:super-admin', 'auth']], function () {
	Route::group(['prefix' => 'users'], function() {
		Route::post('/store', 'UsersController@store')->name('users.store');	
		Route::get('{id}/show', 'UsersController@show')->name('users.show');	
		Route::get('/index', 'UsersController@index')->name('users.index');	
		Route::post('/update/{id}', 'UsersController@update')->name('users.update');	
		Route::post('/edit/{id}', 'UsersController@edit')->name('users.edit');
		Route::delete('/delete/', 'UsersController@destroy')->name('users.destroy');		
	});
 	Route::group(['prefix' => 'image'], function() {
		Route::post('/store', 'ImageController@store')->name('image.store');	
		Route::post('/index', 'ImageController@index')->name('image.index');	
		Route::post('/update/{id}', 'ImageController@update')->name('image.update');	
		Route::post('/edit/{id}', 'ImageController@edit')->name('image.edit');
		Route::delete('/delete/', 'ImageController@destroy')->name('image.destroy');		
	});
});

Auth::routes();
