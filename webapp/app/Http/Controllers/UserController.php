<?php

namespace App\Http\Controllers;

use App\DanhMucSanPhamModel;
use App\HoaHongKhachHangModel;
use App\Http\Requests\UserAddRequest;
use App\NguoiDungModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // dữ liệu lưu thông tin người dùng
    public function registerNDstore(UserAddRequest $request)
    {
//        dd($request->all());
        $pas = $request->get('password');
        $pasre = $request->get('repassword');
        $code = strtoupper(uniqid());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $new_file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('image', $new_file_name);
            $kh_image = $new_file_name;
        } else {
            $kh_image = "";
        }
        $macode = strtoupper($request->get('ma_code_cha'));
        $ma_code_cha = UsersModel::where('code', $macode)->first();
        if ($ma_code_cha == null) {
            $macodecha = '';
        } else {
            $macodecha = $macode;
        }
        if ($pas == $pasre) {
            $user = UsersModel::create([
                'phone' => $request->get('phone'),
                'password' => Hash::make($pas),
                'email' => $request->get('email'),
                'role' => 2,
                'code' => $code,
            ]);
            NguoiDungModel::create([
                'user_id' => $user->id,
                'kh_ten' => $request->get('kh_ten'),
//                'kh_gioi_tinh' => "",
//                'kh_ngay_sinh' => "",
//                'kh_dia_chi' => "",
//                'kh_cmnd' => "",
//                'kh_ngay_cap' => "",
//                'kh_image' => $kh_image,
            ]);
            HoaHongKhachHangModel::create([
                'user_id' => $user->id,
                'ma_code_cha' => $macodecha,
                'tien_hoa_hong' => 0,
            ]);
            if ($macodecha == null) {
                return redirect('user/login')->with('success', 'Thêm thành công !')
                    ->with('error', 'Mã người giới thiệu không tồn tại, vui lòng cập nhật lại trong thông tin cá nhân !');
            } else {
                return redirect('user/login')->with('success', 'Thêm thành công !');
            }
        } else {
            return redirect('user/login')->with('error', 'Nhập lại mật khẩu không chính xác !');
        }
    }

    // xem thông tin người dùng
    public function profileND()
    {
        $data = DanhMucSanPhamModel::all();
        return view('userlayouts.nguoidung.profile', compact('data'));
    }
}
