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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::post('image/store', 'ImageController@store')->name('image.store');


Route::group(['middleware' =>['role:admin']], function() {
	
	
});
=======
Route::post('saveimage', 'ImageController@guardarImagen')->name('guardaimagen');
Route::get('/', 'FrontPagesController@index');
>>>>>>> 746cd979c96e2e3ddf46b6bd6ec87bfac89ea414

