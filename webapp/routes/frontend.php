<?php
// trang chủ
Route::get('/user', 'FrontEndController@trangchu');

Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/services', 'FrontEndController@services')->name('services');
Route::get('/secret', 'FrontEndController@secret')->name('secret');

// trang đơm hàng
Route::post('/order', 'FrontEndController@order')->name('order');
Route::post('/orderStore', 'FrontEndController@orderStore')->name('orderStore');

// trang đang nhập
Route::get('/user/login', 'FrontEndController@danhmucsanphamLogin');

//
Route::get('/user/san-pham/{id}', 'FrontEndController@sanphamdanhmuc')->name('sanphamdanhmuc');

Route::get('/san-pham/single/{id}', 'FrontEndController@singelproduct')->name('singelproduct');