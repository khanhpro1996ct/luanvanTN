<?php

namespace App\Http\Controllers;

use App\DanhMucSanPhamModel;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function data()
    {
        $data = DanhMucSanPhamModel::all();
        return $data;
    }

    public function danhmucsanpham()
    {
        $data = $this->data();
        return view('userlayouts.index', compact('data'));
    }

    public function danhmucsanphamLogin()
    {
        $data = $this->data();
        return view('login', compact('data'));
    }
}
