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
//ホーム画面
Route::get('/home', 'HomeController@index')->name('home');
//メニュー画面
// Route::get('/test/menu', 'Test\MenuController@menu');
// //照会処理画面
// Route::get('/test/search', 'Test\MenuController@search')->name('search');
// Route::post('/test/search', 'Test\MenuController@search')->name('search');
// //更新処理画面
// Route::get('/test/update', 'Test\MenuController@update')->name('update');
// //更新完了画面
// Route::post('/test/complete', 'Test\MenuController@complete')->name('complete');
// //アカウント一覧の表示
// Route::get('/ono_db/index', 'ono_dbController@index');
// Route::post('/ono_db/index', 'ono_dbController@index');
// Route::get('/test/complete', 'Test\MenuController@complete')->name('complete');
// Route::post('/test/complete', 'Test\MenuController@complete')->name('complete');
Route::get('kouka', 'KoukaController@index');
Route::post('kouka/find', 'KoukaController@find');
Route::get('kouka/show', 'KoukaController@show');
Route::get('kouka/add', 'KoukaController@add');
Route::post('kouka/create', 'KoukaController@create');
Route::get('kouka/edit', 'KoukaController@edit');
Route::post('kouka/update', 'KoukaController@update');
Route::get('kouka/del', 'KoukaController@del');
Route::post('kouka/remove', 'KoukaController@remove');
