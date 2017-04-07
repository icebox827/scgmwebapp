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

//Voyager Admin Route
Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/android/{id?}',[
   'uses' =>'AndroidController@get',
    'as' => 'android'
]);

Route::get('/proprietaire', function() {
	return view('proprietaire');
});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
