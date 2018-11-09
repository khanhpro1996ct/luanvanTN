<?php
Route::group(['prefix' => 'san-pham'], function () {
    Route::get('/', 'SanPhamController@index')->name('sp.index');
});