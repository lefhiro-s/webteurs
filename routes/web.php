<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ModelsController@index');

Route::get('/modelos-vip', 'ModelsController@vip');

Route::get('/modelos-todas', 'ModelsController@all');

Route::get('/perfil/{id}', 'ModelsController@profile');

Route::get('/busqueda/{data}', 'ModelsController@search');

Route::get('/contacto', 'GeneralController@contact');

Route::get('/informacion', 'GeneralController@info');

Route::get('/registrarse', 'GeneralController@signup');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
