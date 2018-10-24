<?php

namespace App\Http\Controllers;

use App\DanhMucSanPhamModel;
use App\GianHangUserModel;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\SanPhamRequest;
use App\SanPhamGiaModel;
use App\SanPhamModel;
use App\User;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GianHangController extends Controller
{
    public function index()
    {
        return view('backend.gianhang.index');
    }

    // view đăng ký gian hàng
    public function resgiterGH()
    {
        $data = DanhMucSanPhamModel::all();
        return view('userlayouts.gianhang.resgiter', compact('data'));
    }

    // lưu đăng ký gian hàng
    public function regesterStore(RegisterRequest $request)
    {
        $pas = $request->get('password');
        $pasre = $request->get('repassword');
        if ($pas == $pasre) {
            $user = UsersModel::create([
                'phone' => $request->get('phone'),
                'password' => Hash::make($pas),
                'email' => $request->get('email'),
                'role' => 1,
                'code' => 'null',
            ]);
            GianHangUserModel::create([
                'user_id' => $user->id,
                'gh_ten' => $request->get('gh_ten'),
                'gh_dia_chi' => $request->get('gh_dia_chi'),
                'gh_tien_loi_nhuan' => 0,
            ]);
            return redirect('user/login')->with('success', 'Đăng ký thành công !');
        } else {
            return redirect('gian-hang/resgiter')->with('error', 'Nhập lại mật khẩu không chính xác !');
        }
    }

    // view danh sách sản phẩm của gian hàng
    public function qlsanpham()
    {
        $data = SanPhamModel::join('san_pham_danh_muc', 'san_pham_danh_muc.id', '=', 'san_pham.id_danh_muc')
            ->join('san_pham_gia', 'san_pham_gia.id_sp', '=', 'san_pham.id')
            ->where('san_pham.id_gian_hang', '=', Auth::user()->id)
            ->orderby('san_pham.created_at', 'asc')
            ->get();
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $data[$i]['stt'] = $i + 1;
        }
//        dd($data);
        return view('userlayouts.gianhang.qlsanpham', compact('data'));
    }

    // view thêm mới sản phẩm của gia hàng
    public function tmsanpham()
    {
        $danhmuc = DanhMucSanPhamModel::all();
        return view('userlayouts.gianhang.tmsanpham', compact('danhmuc'));
    }

    // dữ liệu của thêm mới
    public function sanphamstore(SanPhamRequest $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $new_file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload', $new_file_name);
            $sp_image = $new_file_name;
        } else {
            $sp_image = "";
        }
        $sanpham = SanPhamModel::create([
            'id_gian_hang' => Auth::user()->id,
            'id_danh_muc' => $request->dm_ten,
            'sp_ten' => $request->get('sp_ten'),
            'sp_so_luong' => $request->get('sp_so_luong'),
            'sp_image' => $sp_image,
        ]);
        SanPhamGiaModel::create([
            'id_sp' => $sanpham->id,
            'gia_goc' => $request->get('gia_goc'),
            'gia_km' => $request->get('gia_km'),
        ]);
        return redirect('gian-hang/quan-ly-san-pham')->with('success', 'Thêm thành công !');
    }

    public function cnsanpham()
    {
        $danhmuc = DanhMucSanPhamModel::all();
        return view('userlayouts.gianhang.cnsanpham', compact('danhmuc'));
    }
}
