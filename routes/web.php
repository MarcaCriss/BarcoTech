<?php
/*DB::listen(function($query){
    echo "<pre>{$query->sql}</pre>";
});*/

use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {    
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cliente', 'ClienteController');
Route::resource('/tipoequipo', 'TipoequipoController');
Route::resource('/equipo', 'EquipoController');
Route::resource('/tripulacion', 'TripulacionController');
Route::resource('/propietario', 'PropietarioController');
Route::resource('/bote', 'BoteController');