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

Route::get('/home', [
    'uses'=>'HomeController@index',
    'as'=>'home'

]);

Route::get('/dashboard', [
    'uses'=>'HomeController@index',
    'as'=>'dashboard'

]);


Route::get('/android/{id?}',[
   'uses' =>'AndroidController@get',
    'as' => 'android'
]);

Route::get('/addvehicule',[
    'uses' =>'AddvehiculeController@index',
    'as' => 'addvehicule'
]);

Route::get('/addconducteur',[
    'uses' =>'AddconducteurController@index',
    'as' => 'addconducteur'
]);



Route::get('/addproprietaire',[
    'uses' =>'AddproprietaireController@index',
    'as' => 'addproprietaire'
]);

Route::get('/proprietaire',[
    'uses'=>'ProprietaireController@index',
    'as'=>'proprietaire'
]);
Route::get('/vehicules-details/{id?}',[
    'uses'=>'ProprietaireController@details',
    'as'=>'vehicules-details'
]);

Route::post('/proprietaire-save',[
    'uses' => 'ProprietaireController@save',
    'as' => 'proprietaire.save'
]);



Route::get('/station',[
    'uses'=>'StationController@index',
    'as'=>'station'

]);

Route::get('/registraire', [
    'uses'=>'RegistraireController@index',
    'as'=>'registraire'

]);
Route::post('/registraire-save',[
    'uses'=>'RegistraireController@save',
    'as'=>'registraire.save'
]);

Route::get('/reference', [
    'uses'=>'ReferenceController@index',
    'as'=>'reference'

]);

Route::post('/reference-save',[
    'uses'=>'ReferenceController@save',
    'as'=>'reference.save'
]);
Route::get('/addreference', [
    'uses'=>'AddreferenceController@index',
    'as'=>'addreference'

]);
Route::get('/qrcode/{id?}',[
   'uses' => "VehiculeController@qrcode",
    'as' => 'qr.download'
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/conducteur', [
    'uses'=>'ConducteurController@index',
    'as'=>'conducteur'

]);

Route::get('/conducteur-details/{id?}', [
    'uses'=>'ConducteurController@detail',
    'as'=>'conducteur-details'

]);

Route::post('/conducteur-save',[
    'uses'=>'ConducteurController@save',
    'as'=>'conducteur.save'
]);
Route::get('/vehicule', [
    'uses'=>'VehiculeController@index',
    'as'=>'vehicule'

]);

Route::get('/stati/',[
   'uses' => 'ImportController@station',
    'as' => 'stat'
]);


Route::get('/registre', [
    'uses'=>'RegistreController@index',
    'as'=>'registre'

]);

Route::get('/detaille/{id?}', [
    'uses'=>'VehiculeController@details',
    'as'=>'detaille'

]);