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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'jurusan'], function () {
    Route::get('/', 'JurusanController@index');
    Route::get('/create', 'JurusanController@create');
    Route::post('/', 'JurusanController@store');
    Route::get('/{id}/show', 'JurusanController@show');
    Route::get('/{id}', 'JurusanController@edit');
    Route::put('/{id}', 'JurusanController@update');
    Route::delete('/{id}', 'JurusanController@destroy');
});
/*
Route::group(['prefix' => 'peserta'], function () {
    Route::get('/', 'PesertaController@index');
    Route::get('/create', 'PesertaController@create');
    Route::post('/', 'PesertaController@store');
    Route::get('/{id}', 'PesertaController@edit');
    Route::put('/{id}', 'PesertaController@update');
    Route::delete('/{id}', 'PesertaController@destroy');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
