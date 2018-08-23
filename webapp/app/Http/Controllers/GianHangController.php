<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GianHangController extends Controller
{
    public function index()
    {
        return view('backend.gianhang.index');
    }
}
