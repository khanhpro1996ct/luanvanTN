<?php

namespace App\Http\Controllers;

use App\DanhMucSanPhamModel;
use App\HoaDonModel;
use App\HoaHongKhachHangModel;
use App\Http\Requests\UserAddRequest;
use App\NguoiDungModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                'kh_gioi_tinh' => $request->get('kh_gioi_tinh'),
                'kh_ngay_sinh' => $request->get('kh_ngay_sinh'),
            ]);
            HoaHongKhachHangModel::create([
                'user_id' => $user->id,
                'ma_code_cha' => $macodecha,
                'tien_hoa_hong' => 0,
            ]);
            if ($macodecha == null) {
                return redirect('user/login')->with('success', 'Đăng ký thành công !')
                    ->with('error', 'Mã người giới thiệu không tồn tại, vui lòng cập nhật lại trong thông tin cá nhân !');
            } else {
                return redirect('user/login')->with('success', 'Đăng ký thành công !');
            }
        } else {
            return redirect('user/login')->with('error', 'Nhập lại mật khẩu không chính xác !');
        }
    }

    // xem thông tin người dùng
    public function profileND()
    {
        $data = DanhMucSanPhamModel::all();
        $user = UsersModel::join('users_profile', 'users_profile.user_id', '=', 'users.id')
            ->join('hoa_hong_khach_hang', 'hoa_hong_khach_hang.user_id', '=', 'users.id')
            ->where('users.role', '=', 2)
            ->where('users.id', '=', Auth::user()->id)
            ->select([
                'users.id as id',
                'users.phone as phone',
                'users.email as email',
                'users.code as code',
                'users_profile.kh_ten as ten',
                'users_profile.kh_gioi_tinh as gioitinh',
                'users_profile.kh_ngay_sinh as ngaysinh',
                'users_profile.kh_dia_chi as diachi',
                'users_profile.kh_cmnd as cmnd',
                'users_profile.kh_ngay_cap as ngaycap',
                'users_profile.kh_image as image',
                'hoa_hong_khach_hang.ma_code_cha as codecha',
                'hoa_hong_khach_hang.tien_hoa_hong as tienhoahong',
            ])->get()->first()->toArray();
//        dd($user);
        $order = HoaDonModel::join('users', 'users.id', 'hoa_don.id_kh')
            ->join('users_profile', 'users_profile.user_id', 'hoa_don.id_kh')
            ->where('hoa_don.id_kh', '=', Auth::user()->id)
            ->orderByRaw('hoa_don.created_at asc')
            ->select([
                'hoa_don.id as idhoadon',
                'hoa_don.tong_tien as tongtien',
                'hoa_don.status as status',
                'hoa_don.ma_hoa_don as mahoadon',
                'hoa_don.ho_ten as hoten',
                'hoa_don.sdt_kh as sdt',
                'hoa_don.dia_chi_giao as diachi',
            ])->get();
        $count = count($order);
        for ($i = 0; $i < $count; $i++) {
            $order[$i]['stt'] = $i + 1;
        }
//        dd($order->toArray());
        return view('userlayouts.nguoidung.profile', compact('data', 'user', 'order'));
    }

    // trang cá nhân người dùng
    public function profileCaNhan()
    {
        $user = UsersModel::join('users_profile', 'users_profile.user_id', '=', 'users.id')
            ->join('hoa_hong_khach_hang', 'hoa_hong_khach_hang.user_id', '=', 'users.id')
            ->where('users.role', '=', 2)
            ->where('users.id', '=', Auth::user()->id)
            ->select([
                'users.id as id',
                'users.phone as phone',
                'users.email as email',
                'users.code as code',
                'users_profile.kh_ten as ten',
                'users_profile.kh_gioi_tinh as gioitinh',
                'users_profile.kh_ngay_sinh as ngaysinh',
                'users_profile.kh_dia_chi as diachi',
                'users_profile.kh_cmnd as cmnd',
                'users_profile.kh_ngay_cap as ngaycap',
                'users_profile.kh_image as image',
                'hoa_hong_khach_hang.ma_code_cha as codecha',
                'hoa_hong_khach_hang.tien_hoa_hong as tienhoahong',
            ])->get()->first()->toArray();
        return view('userlayouts.nguoidung.profilecanhan', compact('user'));
    }

    // trang sổ địa chỉ
    public function SoDiaChi()
    {
        return view('userlayouts.nguoidung.sodiachi', compact('user'));
    }

    // thêm sổ địa chỉ
    public function themSoDiaChi()
    {
        return view('userlayouts.nguoidung.themsodiachi', compact('user'));
    }
}
