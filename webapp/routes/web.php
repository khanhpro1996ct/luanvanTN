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
Route::get('/admin', function () {
    return view('adminlayouts.home');
});

Route::group(['prefix' => 'san-pham'], function () {
    Route::get('/', 'SanPhamController@index')->name('sp.index');
});

Route::group(['prefix' => 'gian-hang'], function () {
    Route::get('/', 'GianHangController@index')->name('gh.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
