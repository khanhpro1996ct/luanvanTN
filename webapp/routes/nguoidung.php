<?php
Route::group(['prefix' => 'nguoi-dung'], function () {

    // đăng ký người dùng
    Route::post('/resgiter', 'UserController@registerNDstore')->name('registerNDstore');

    // thông tin nguoi dùng cá nhân
    Route::get('/ca-nhan', 'UserController@profileCaNhan')->name('profileCaNhan');

    // trang sổ đại chỉ
    Route::get('/so-dia-chi', 'UserController@SoDiaChi')->name('SoDiaChi');
    Route::get('/so-dia-chi/add', 'UserController@themSoDiaChi')->name('themSoDiaChi');
    Route::post('/so-dia-chi/add', 'UserController@ThemDiaChiStore')->name('ThemDiaChiStore');

    Route::get('/so-dia-chi/edit/{id}', 'UserController@ThemDiaChiEdit')->name('ThemDiaChiEdit');
    Route::post('/so-dia-chi/edit{id}', 'UserController@ThemDiaChiUpdate')->name('ThemDiaChiUpdate');

    // ajax quan huyen
    Route::get('/ajax/quan-huyen', 'UserController@ajaxQuanHuyen')->name('ajaxQuanHuyen');

    Route::get('/ajax/phuong-xa', 'UserController@ajaxPhuongXa')->name('ajaxPhuongXa');

    // thogn tin don hang
    Route::get('/thong-tin-don-hang', 'UserController@XemDH')->name('XemDH');

    Route::get('/huy/{id}', 'UserController@HuyHDND')->name('HuyHDND');

    // cập nhật thông tin cá nhân
    Route::get('/edit', 'UserController@profileEdit')->name('profileEdit');


});