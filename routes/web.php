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
Route::get('/test/search', 'Test\MenuController@search')->name('search');
Route::post('/test/search', 'Test\MenuController@search')->name('search');
Route::get('/test/update', 'Test\MenuController@update')->name('update');
Route::post('/test/complete', 'Test\MenuController@complete')->name('complete');
Route::get('/ono_db/index', 'ono_dbController@index');
Route::post('/ono_db/index', 'ono_dbController@index');
// Route::get('/test/complete', 'Test\MenuController@complete')->name('complete');
// Route::post('/test/complete', 'Test\MenuController@complete')->name('complete');
