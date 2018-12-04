<?php

namespace App\Http\Controllers;

use App\HoaDonModel;
use App\UsersModel;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    // trang admin
    public function index()
    {
        $order = count(HoaDonModel::all());
        $tongtien = HoaDonModel::select('tong_tien')->get();
        $tongtien = $tongtien->sum('tong_tien');
        $khachhang = UsersModel::join('users_profile', 'users_profile.user_id', '=', 'users.id')
            ->join('hoa_hong_khach_hang', 'hoa_hong_khach_hang.user_id', '=', 'users.id')
            ->where('users.role', '=', 2)
            ->orderBy('users.created_at', 'asc')
            ->select([
                'id',
                'phone',
                'email',
                'code',
                'kh_ten',
                'kh_gioi_tinh',
                'kh_ngay_sinh',
                'kh_dia_chi',
                'kh_cmnd',
                'kh_ngay_cap',
                'kh_image',
                'ma_code_cha',
                'tien_hoa_hong',
            ])->get();
        $nguoidung = count(UsersModel::all());
        $nguoidungthuong = count(UsersModel::where('role', '=', 2)->get());
        $gianhang = count(UsersModel::where('role', '=', 1)->get());
        $gianhangkinhdoanh = count(UsersModel::where('role', '=', 1)->where('active', '=', 1)->get());
        return view('adminlayouts.home', compact('gianhangkinhdoanh', 'gianhang', 'khachhang', 'nguoidungthuong', 'order', 'tongtien', 'nguoidung'));
    }
}
