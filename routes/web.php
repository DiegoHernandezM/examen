<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//Rutas para dependencias

Route::get('/dependencias', function () {
    return view('admin.dependencias.index');
});

Route::bind('dependencia', function($dependencias){
    return App\Dependencias::find($dependencias);
});

Route::resource('admin/dependencias', 'DependenciasController');

Route::get('admin/dependencias',[
    'uses' => 'DependenciasController@index',
    'as' => 'admin.dependencias.index'
]);

Route::get('dependencias/edit/{dependencias}', [
    'uses' => 'DependenciasController@edit',
    'as' => 'admin.dependencias.edit'
]);

Route::post('dependencias/store', [
    'uses' => 'DependenciasController@store',
    'as' => 'admin.dependencias.store'
]);

Route::put('dependencias/update/{dependencias}', [
    'uses' => 'DependenciasControllerr@update',
    'as' => 'admin.dependencias.update'
]);

Route::delete('dependencias/delete/{dependencia}', [
    'uses' => 'DependenciasController@destroy',
    'as' => 'admin.dependencias.destroy'
]);

//Rutas para autoridades

Route::get('/autoridades', function () {
    return view('admin.autoridades.index');
});

Route::bind('autoridad', function($autoridades){
    return App\Autoridades::find($autoridades);
});

Route::resource('admin/autoridades', 'AutoridadesController');

Route::get('admin/autoridades',[
    'uses' => 'AutoridadesController@index',
    'as' => 'admin.autoridades.index'
]);

Route::post('autoridades/store', [
    'uses' => 'AutoridadesController@store',
    'as' => 'admin.autoridades.store'
]);

Route::delete('autoridades/delete/{autoridad}', [
    'uses' => 'AutoridadesController@destroy',
    'as' => 'admin.autoridades.destroy'
]);

Route::get('autoridades/edit/{autoridades}', [
    'uses' => 'AutoridadesController@edit',
    'as' => 'admin.autoridades.edit'
]);
Route::put('autoridades/update/{autoridades}', [
    'uses' => 'AutoridadesController@update',
    'as' => 'admin.autoridades.update'
]);
