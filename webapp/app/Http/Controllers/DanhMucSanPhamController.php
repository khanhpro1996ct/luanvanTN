<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhMucSanPhamController extends Controller
{
    public function index()
    {
        return view('backend.danhmucsanpham.index');
    }
}
