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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test/menu', 'Test\MenuController@menu');
Route::post('/test/search', 'Test\MenuController@search')->name('search');
Route::post('/test/update', 'Test\MenuController@update')->name('update');
Route::post('/test/complete', 'Test\MenuController@complete')->name('complete');
