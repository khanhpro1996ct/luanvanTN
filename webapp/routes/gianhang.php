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

    // cài đặt sản phẩm của gian hàng
    Route::get('/quan-ly-san-pham/cai-dat/{id}', 'GianHangController@caidatSanPham')->name('gh.caidatSanPham');
    Route::post('/quan-ly-san-pham/cai-dat/{id}', 'GianHangController@caidatStore')->name('gh.caidatStore');

    // xóa sản phẩm cảu gian hàng
    Route::get('/quan-ly-san-pham/destroy/{id}', 'GianHangController@xsanphamDestroy')->name('gh.xsanphamDestroy');

    // profile gian hàng
    Route::get('/profile', 'GianHangController@profileGianHang')->name('gh.profileGianHang');

    // xem san pham
    Route::get('/quan-ly-san-pham/chi-tiet/{id}', 'GianHangController@xemSanPham')->name('gh.xemSanPham');
});