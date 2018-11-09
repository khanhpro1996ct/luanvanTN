<?php
// trang chủ
Route::get('/user', 'FrontEndController@trangchu');

// trang đơm hàng
Route::post('/order', 'FrontEndController@order')->name('order');

// trang đang nhập
Route::get('/user/login', 'FrontEndController@danhmucsanphamLogin');

//
Route::get('/user/san-pham/{id}', 'FrontEndController@sanphamdanhmuc')->name('sanphamdanhmuc');

Route::get('/san-pham/single/{id}', 'FrontEndController@singelproduct')->name('singelproduct');