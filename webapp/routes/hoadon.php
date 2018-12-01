<?php

Route::group(['prefix' => 'hoa-don'], function () {
    Route::get('/', 'HoaDonController@index')->name('hoadon.index');
});