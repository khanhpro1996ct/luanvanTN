<?php

Route::get('/admin', 'BackEndController@index')->name('admin.index')->middleware('admin');