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


Route::get('/dependencias', function () {
    return view('admin.dependencias.index');
});

//Routas para dependencias
Route::bind('dependencia', function($dependencias){
    return App\Dependencias::find($dependencias);
});

Route::resource('admin/dependencias', 'DependenciasController');

Route::get('admin/dependencias',[
    'uses' => 'DependenciasController@index',
    'as' => 'admin.dependencias.index'
]);

Route::get('dependencias/edit/{dependencia}', [
    'uses' => 'DependenciasController@edit',
    'as' => 'admin.dependencias.edit'
]);

Route::post('dependencias/store', [
    'uses' => 'DependenciasController@store',
    'as' => 'admin.dependencias.store'
]);

Route::put('dependencias/update/{dependencias}', [
    'uses' => 'ADependenciasController@update',
    'as' => 'admin.dependencias.update'
]);

Route::delete('dependencias/delete/{dependencia}', [
    'uses' => 'DependenciasController@destroy',
    'as' => 'admin.dependencias.destroy'
]);