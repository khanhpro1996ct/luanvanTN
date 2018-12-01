<?php

Route::group(['prefix' => 'danh-muc-san-pham'], function () {
    Route::get('/', 'DanhMucSanPhamController@index')->name('dm.index');
    Route::get('add', 'DanhMucSanPhamController@create')->name('dm.create');
    Route::post('add', 'DanhMucSanPhamController@store')->name('dm.store');
    Route::get('edit/{id}', 'DanhMucSanPhamController@edit')->name('dm.edit');
    Route::post('edit/{id}', 'DanhMucSanPhamController@update')->name('dm.update');
    Route::get('destroy/{id}', 'DanhMucSanPhamController@destroy')->name('dm.destroy');
});