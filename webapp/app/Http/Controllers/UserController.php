<?php

namespace App\Http\Controllers;

use App\NguoiDungModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // dữ liệu lưu thông tin người dùng
    public function registerNDstore(Request $request)
    {

        $pas = $request->get('password');
        $pasre = $request->get('repassword');
        $code = strtoupper(uniqid());
        dd($code);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $new_file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload', $new_file_name);
            $kh_image = $new_file_name;
        } else {
            $kh_image = "";
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
                'kh_diachi' => $request->get('kh_diachi'),
                'kh_cmnd' => $request->get('kh_cmnd'),
                'kh_ngay_cap' => $request->get('kh_ngay_cap'),
                'kh_image' => $kh_image,
            ]);
            return redirect('user/login')->with('success', 'Thêm thành công !');
        } else {
            return redirect('user/login')->with('error', 'Nhập lại mật khẩu không chính xác !');
        }
    }
}
