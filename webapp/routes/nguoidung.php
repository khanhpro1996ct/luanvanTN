<?php
Route::group(['prefix' => 'nguoi-dung'], function () {

    // đăng ký người dùng
    Route::post('/resgiter', 'UserController@registerNDstore')->name('registerNDstore');

    // thông tin người dùng
    Route::get('/profile', 'UserController@profileND')->name('nd.profileND');

    // thông tin nguoi dùng cá nhân
    Route::get('/ca-nhan', 'UserController@profileCaNhan')->name('profileCaNhan');

    // trang sổ đại chỉ
    Route::get('/so-dia-chi', 'UserController@SoDiaChi')->name('SoDiaChi');
});