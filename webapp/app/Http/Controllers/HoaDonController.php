<?php

namespace App\Http\Controllers;

use App\HoaDonModel;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function index()
    {
        $order_cd = HoaDonModel::join('users', 'users.id', '=', 'hoa_don.id_kh')
            ->join('users_profile', 'users_profile.user_id', '=', 'hoa_don.id_kh')
            ->where('hoa_don.status', '=', 0)
            ->select([
                'hoa_don.id as idhoadon',
                'hoa_don.ma_hoa_don as mahoadon',
                'hoa_don.ho_ten as tennguoinhan',
                'hoa_don.sdt_kh as sdtnguoinhan',
                'hoa_don.dia_chi_giao as diachigiao',
                'users_profile.kh_ten as tennguoidat',
            ])
            ->get();
        dd($order_cd->toArray());
        return view('backend.hoadon.index', compact('order_cd'));
    }
}
