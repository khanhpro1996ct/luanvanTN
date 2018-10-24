<?php

namespace App\Http\Controllers;

use App\NguoiDungModel;
use App\UsersModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerND()
    {
        return view('userlayouts.nguoidung.dangky');
    }

    public function registerNDstore(Request $request)
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
            NguoiDungModel::create([
                'user_id' => $user->id,
                'gh_ten' => $request->get('gh_ten'),
                'gh_email' => $request->get('gh_email'),
                'gh_dia_chi' => $request->get('gh_dia_chi'),
                'gh_tien_loi_nhuan' => 0,
            ]);
            return redirect('user/login')->with('success', 'Thêm thành công !');
        } else {
            return redirect('gian-hang/resgiter')->with('error', 'Nhập lại mật khẩu không chính xác !');
        }
    }
}
