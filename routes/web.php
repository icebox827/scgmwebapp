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

Route::get('/proprietaire',[
    'uses'=>'ProprietaireController@index',
    'as'=>'proprietaire'


]);

Route::get('/station',[
    'uses'=>'StationController@index',
    'as'=>'station'

]);

Route::get('/registraire', [
    'uses'=>'RegistraireController@index',
    'as'=>'registraire'

]);




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/conducteur', [
    'uses'=>'ConducteurController@index',
    'as'=>'conducteur'

]);

Route::get('/vehicule', [
    'uses'=>'VehiculeController@index',
    'as'=>'vehicule'

]);

Route::get('/stati/',[
   'uses' => 'ImportController@station',
    'as' => 'stat'
]);