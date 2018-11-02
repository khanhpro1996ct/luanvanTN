<?php
Route::group(['prefix' => 'gian-hang'], function () {
    // danh sách ở backend
    Route::get('/', 'GianHangController@index')->name('gh.index');

    // đăng ký gian hàng
    Route::get('/resgiter', 'GianHangController@resgiterGH')->name('gh.resgiterGH');
    Route::post('/resgiter/add', 'GianHangController@regesterStore')->name('gh.regesterStore');

    // danh sách sản phẩm
    Route::get('/quan-ly-san-pham', 'GianHangController@qlsanpham')->name('gh.qlsanpham');

    // thêm sản phẩm của gian hàng
    Route::get('/quan-ly-san-pham/add', 'GianHangController@tmsanpham')->name('gh.tmsanpham');
    Route::post('/quan-ly-san-pham/add', 'GianHangController@tmsanphamStore')->name('gh.tmsanphamStore');

    // sửa sản phẩm của gian hàng
    Route::get('/quan-ly-san-pham/edit/{id}', 'GianHangController@cnsanpham')->name('gh.cnsanpham');
    Route::post('/quan-ly-san-pham/edit/{id}', 'GianHangController@cnsanphamStore')->name('gh.cnsanphamStore');

    // xóa sản phẩm cảu gian hàng
    Route::get('/quan-ly-san-pham/destroy/{id}', 'GianHangController@xsanphamDestroy')->name('gh.xsanphamDestroy');

    // profile gian hàng
    Route::get('/profile', 'GianHangController@profileGianHang')->name('gh.profileGianHang');
});