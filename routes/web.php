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


use Illuminate\Support\Facades\Route;

Route::redirect('/home', '/');

Route::name('lobby.')->group(function (){
    Route::get('/', 'LobbyController@list')->name('list');
    Route::get('/create', 'LobbyController@create')->name('create');
    Route::post('/store', 'LobbyController@store')->name('store');
    Route::get('/{id}', 'LobbyController@show')->name('show');

});
