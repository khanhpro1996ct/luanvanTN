<?php

namespace App\Http\Controllers;

use App\DanhMucSanPhamModel;
use App\SanPhamModel;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function data()
    {
        $data = DanhMucSanPhamModel::all();
        return $data;
    }

    public function trangchu()
    {
        $data = $this->data();
        $sanpham = SanPhamModel::join('san_pham_gia', 'san_pham_gia.id_sp', '=', 'san_pham.id')
            ->join('san_pham_danh_muc', 'san_pham_danh_muc.id', '=', 'san_pham.id_danh_muc')
            ->join('users', 'users.id', '=', 'san_pham.id_gian_hang')
            ->join('users_gian_hang', 'users.id', '=', 'users_gian_hang.user_id')
            ->where('san_pham_gia.gia_km', '>', 0)
            ->orderByRaw('san_pham.created_at desc')
            ->select([
                'san_pham.id as id_sp',
                'san_pham.sp_ten as ten_sp',
                'san_pham.sp_so_luong as so_luong_sp',
                'san_pham.sp_image as image_sp',
                'san_pham_gia.gia_goc as gia_goc_sp',
                'san_pham_gia.gia_km as gia_km_sp',
                'san_pham_danh_muc.dm_ten as dm_sp',
                'users_gian_hang.gh_ten as gh_sp',
            ]);
        $sanpham = $sanpham->paginate(8);
//        dd($sanpham);
        return view('userlayouts.index', compact('data', 'sanpham'));
    }

    public function danhmucsanphamLogin()
    {
        $data = $this->data();
        return view('login', compact('data'));
    }

    //
    public function order()
    {
        $data = $this->data();
        return view('userlayouts.sanpham.order', compact('data'));
    }

    // trang sản phẩm theo danh mục
    public function sanphamdanhmuc($id)
    {
        $data = DanhMucSanPhamModel::all();
        $sanpham = SanPhamModel::join('san_pham_gia', 'san_pham_gia.id_sp', '=', 'san_pham.id')
            ->join('san_pham_danh_muc', 'san_pham_danh_muc.id', '=', 'san_pham.id_danh_muc')
            ->join('users', 'users.id', '=', 'san_pham.id_gian_hang')
            ->join('users_gian_hang', 'users.id', '=', 'users_gian_hang.user_id')
            ->where('san_pham_danh_muc.id', '=', $id)
            ->select([
                'san_pham.id as id_sp',
                'san_pham.sp_ten as ten_sp',
                'san_pham.sp_so_luong as so_luong_sp',
                'san_pham.sp_image as image_sp',
                'san_pham_gia.gia_goc as gia_goc_sp',
                'san_pham_gia.gia_km as gia_km_sp',
                'san_pham_danh_muc.dm_ten as dm_sp',
                'users_gian_hang.gh_ten as gh_sp',
            ]);
        $sanpham = $sanpham->paginate(8);
        $danhmuc = DanhMucSanPhamModel::where('id', $id)->first()->dm_ten;
//        dd($danhmuc);
//        dd($sanpham);
        return view('userlayouts.sanpham.typeproduct', compact('danhmuc', 'sanpham', 'data'));
    }

    public function singelproduct($id)
    {
        $data = DanhMucSanPhamModel::all();
        $sanphamsigle = SanPhamModel::join('san_pham_gia', 'san_pham_gia.id_sp', '=', 'san_pham.id')
            ->join('san_pham_danh_muc', 'san_pham_danh_muc.id', '=', 'san_pham.id_danh_muc')
            ->join('users', 'users.id', '=', 'san_pham.id_gian_hang')
            ->join('users_gian_hang', 'users.id', '=', 'users_gian_hang.user_id')
            ->where('san_pham.id', '=', $id)
            ->select([
                'san_pham.id as id_sp',
                'san_pham.id_danh_muc as id_danh_muc_sp',
                'san_pham.sp_ten as ten_sp',
                'san_pham.sp_so_luong as so_luong_sp',
                'san_pham.sp_image as image_sp',
                'san_pham.sp_description as description_sp',
                'san_pham_gia.gia_goc as gia_goc_sp',
                'san_pham_gia.gia_km as gia_km_sp',
                'san_pham_danh_muc.dm_ten as dm_sp',
                'users_gian_hang.gh_ten as gh_sp',
            ])->first()->toArray();
        $sanpham = SanPhamModel::join('san_pham_gia', 'san_pham_gia.id_sp', '=', 'san_pham.id')
            ->join('san_pham_danh_muc', 'san_pham_danh_muc.id', '=', 'san_pham.id_danh_muc')
            ->join('users', 'users.id', '=', 'san_pham.id_gian_hang')
            ->join('users_gian_hang', 'users.id', '=', 'users_gian_hang.user_id')
            ->where('san_pham.id_danh_muc', '=', $sanphamsigle['id_danh_muc_sp'])
            ->where('san_pham.id', '<>', $id)
            ->select([
                'san_pham.id as id_sp',
                'san_pham.sp_ten as ten_sp',
                'san_pham.sp_so_luong as so_luong_sp',
                'san_pham.sp_image as image_sp',
                'san_pham_gia.gia_goc as gia_goc_sp',
                'san_pham_gia.gia_km as gia_km_sp',
                'san_pham_danh_muc.dm_ten as dm_sp',
                'users_gian_hang.gh_ten as gh_sp',
            ]);
        $sanpham = $sanpham->paginate(4);
        return view('userlayouts.sanpham.singleproduct', compact('sanpham', 'danhmuc', 'sanphamsigle', 'data'));
    }

    // về chúng tôi
    public function about()
    {
        $data = DanhMucSanPhamModel::all();
        return view('userlayouts.about', compact('data'));
    }

    // services.blade.php
    public function services()
    {
        $data = DanhMucSanPhamModel::all();
        return view('userlayouts.services', compact('data'));
    }

    // secret
    public function secret()
    {
        return view('userlayouts.secret', compact('data'));
    }
}
