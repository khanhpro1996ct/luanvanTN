<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    if (empty(Auth::user())) {
        if (Auth::user()->active == 1)
            return redirect('login');
        else {
            return view('userlayouts.500');
        }
    }
    if (Auth::user()->type == 2) {
        if (Auth::user()->active == 1)
            return redirect(route('store/get_home'));
        else {
            return view('website.chan');
        }
    }
    if (Auth::user()->type == 1 || Auth::user()->type == 3) {
        if (Auth::user()->active == 1)
            return redirect(route('kh.index'));
        else {
            return view('website.chan');
        }

    }
    return view('pages.home');
})->name('khachhang.danhsach');

Route::get('/', function () {
    if (empty(Auth::user())) {
        return redirect('user/login');
    }
    if (Auth::user()->role == 0)
        return view('pages.home');
    if (Auth::user()->role == 1)
        return view('pages.home');
    if (Auth::user()->role == 2)
        return view('pages.home');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('adminlayouts.home');
});
//Route::get('/user', function () {
//    return view('userlayouts.index');
//});
//Route::get('/user/login', function () {
//    return view('login');
//});

Route::get('/logout', 'HomeController@logout')->name('admin.logout');

Route::get('/user', 'FrontEndController@danhmucsanpham');

Route::get('/user/login', 'FrontEndController@danhmucsanphamLogin');

Route::group(['prefix' => 'san-pham'], function () {
    Route::get('/', 'SanPhamController@index')->name('sp.index');
});

@include('gianhang.php');
@include('nguoidung.php');

Route::group(['prefix' => 'danh-muc-san-pham'], function () {
    Route::get('/', 'DanhMucSanPhamController@index')->name('dm.index');
    Route::get('add', 'DanhMucSanPhamController@create')->name('dm.create');
    Route::post('add', 'DanhMucSanPhamController@store')->name('dm.store');
    Route::get('edit/{id}', 'DanhMucSanPhamController@edit')->name('dm.edit');
    Route::post('edit/{id}', 'DanhMucSanPhamController@update')->name('dm.update');
    Route::get('destroy/{id}', 'DanhMucSanPhamController@destroy')->name('dm.destroy');
});

Route::group(['prefix' => 'phan-cap-hoa-hong'], function () {
    Route::get('/', 'PhanCapHoaHongController@index')->name('pchh.index');
    Route::get('add', 'PhanCapHoaHongController@create')->name('pchh.create');
    Route::post('add', 'PhanCapHoaHongController@store')->name('pchh.store');
    Route::get('edit/{id}', 'PhanCapHoaHongController@edit')->name('pchh.edit');
    Route::post('edit/{id}', 'PhanCapHoaHongController@update')->name('pchh.update');
    Route::get('destroy/{id}', 'PhanCapHoaHongController@destroy')->name('pchh.destroy');
    Route::get('status/{id}', 'PhanCapHoaHongController@status')->name('pchh.status');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
