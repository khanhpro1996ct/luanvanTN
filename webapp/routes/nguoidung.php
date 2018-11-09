<?php
Route::group(['prefix' => 'nguoi-dung'], function () {

    // đăng ký người dùng
    Route::post('/resgiter', 'UserController@registerNDstore')->name('registerNDstore');

    // thông tin người dùng
    Route::get('/profile', 'UserController@profileND')->name('nd.profileND');
});