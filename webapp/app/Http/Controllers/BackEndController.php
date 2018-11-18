<?php

namespace App\Http\Controllers;

use App\UsersModel;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    // trang admin
    public function index()
    {
        $khachhang = UsersModel::join('users_profile', 'users_profile.user_id', '=', 'users.id')
            ->join('hoa_hong_khach_hang', 'hoa_hong_khach_hang.user_id', '=', 'users.id')
            ->where('users.role', '=', 2)
            ->select([
                'id',
                'phone',
                'email',
                'code',
                'kh_ten',
                'kh_dia_chi',
                'kh_cmnd',
                'kh_ngay_cap',
                'kh_image',
                'ma_code_cha',
                'tien_hoa_hong',
            ])->get()->toArray();
//        dd($khachhang);
        return view('adminlayouts.home', compact('khachhang'));
    }
}
