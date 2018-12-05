<?php

namespace App\Http\Controllers;

use App\HoaDonModel;
use App\HoaHongKhachHangModel;
use App\PhanCapHoaHongModel;
use App\TongTienHoaHongModel;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function index()
    {
        // hóa đơn chưa duyệt
        $order_cd = HoaDonModel::join('users', 'users.id', '=', 'hoa_don.id_kh')
            ->join('users_profile', 'users_profile.user_id', '=', 'hoa_don.id_kh')
            ->where('hoa_don.status', '=', 0)
            ->select([
                'hoa_don.id as idhoadon',
                'hoa_don.ma_hoa_don as mahoadon',
                'hoa_don.ho_ten as tennguoinhan',
                'hoa_don.sdt_kh as sdtnguoinhan',
                'hoa_don.tong_tien as tongtien',
                'hoa_don.dia_chi_giao as diachigiao',
                'users_profile.kh_ten as tennguoidat',
            ])
            ->get();
        $count = count($order_cd);
        for ($i = 0; $i < $count; $i++) {
            $order_cd[$i]['stt'] = $i + 1;
        }
        $sl_order_cd = count($order_cd);

        // hóa đơn vận chuyển
        $order_vc = HoaDonModel::join('users', 'users.id', '=', 'hoa_don.id_kh')
            ->join('users_profile', 'users_profile.user_id', '=', 'hoa_don.id_kh')
            ->where('hoa_don.status', '=', 1)
            ->select([
                'hoa_don.id as idhoadon',
                'hoa_don.ma_hoa_don as mahoadon',
                'hoa_don.ho_ten as tennguoinhan',
                'hoa_don.sdt_kh as sdtnguoinhan',
                'hoa_don.tong_tien as tongtien',
                'hoa_don.dia_chi_giao as diachigiao',
                'users_profile.kh_ten as tennguoidat',
            ])
            ->get();
        $count = count($order_vc);
        for ($i = 0; $i < $count; $i++) {
            $order_vc[$i]['stt'] = $i + 1;
        }
        $sl_order_vc = count($order_vc);

        // hóa đơn đã duyệt
        $order_ht = HoaDonModel::join('users', 'users.id', '=', 'hoa_don.id_kh')
            ->join('users_profile', 'users_profile.user_id', '=', 'hoa_don.id_kh')
            ->where('hoa_don.status', '=', 2)
            ->select([
                'hoa_don.id as idhoadon',
                'hoa_don.ma_hoa_don as mahoadon',
                'hoa_don.ho_ten as tennguoinhan',
                'hoa_don.sdt_kh as sdtnguoinhan',
                'hoa_don.tong_tien as tongtien',
                'hoa_don.dia_chi_giao as diachigiao',
                'users_profile.kh_ten as tennguoidat',
            ])
            ->get();
        $count = count($order_ht);
        for ($i = 0; $i < $count; $i++) {
            $order_ht[$i]['stt'] = $i + 1;
        }
        $sl_order_ht = count($order_ht);

        // hóa đơn đã hủy
        $order_h = HoaDonModel::join('users', 'users.id', '=', 'hoa_don.id_kh')
            ->join('users_profile', 'users_profile.user_id', '=', 'hoa_don.id_kh')
            ->where('hoa_don.status', '=', 3)
            ->select([
                'hoa_don.id as idhoadon',
                'hoa_don.ma_hoa_don as mahoadon',
                'hoa_don.ho_ten as tennguoinhan',
                'hoa_don.sdt_kh as sdtnguoinhan',
                'hoa_don.tong_tien as tongtien',
                'hoa_don.dia_chi_giao as diachigiao',
                'users_profile.kh_ten as tennguoidat',
            ])
            ->get();
        $count = count($order_h);
        for ($i = 0; $i < $count; $i++) {
            $order_h[$i]['stt'] = $i + 1;
        }
        $sl_order_h = count($order_h);

        return view('backend.hoadon.index', compact('order_cd', 'order_h', 'sl_order_h', 'order_ht', 'sl_order_ht', 'sl_order_cd', 'order_vc', 'sl_order_vc'));
    }

    // hóa đơn vận chuyển
    public function VanChuyen($id)
    {
        HoaDonModel::where('id', $id)->update([
            'status' => 1
        ]);
        return redirect(route('hoadon.index'));
    }

    // hủy hóa đơn
    public function HuyHD($id)
    {
        HoaDonModel::where('id', $id)->update([
            'status' => 3
        ]);
        return redirect(route('hoadon.index'));
    }


    public function findFather($id)
    {
        return HoaHongKhachHangModel::where('user_id', $id)->first()->ma_code_cha;
    }

    public function manyLevel($id, $count, $number)
    {
        $contain = HoaHongKhachHangModel::where('user_id', $id)->first();
        if (empty($contain) || $count > $number) {
            return $count;
        }
        $count++;
        return $this->manyLevel($contain->ma_code_cha, $count, $number);
    }


    public function plusMoney($id, $money, $count, $number)
    {
        $contain['money'] = HoaHongKhachHangModel::where('user_id', $id)->first();
        if (empty($contain['money']) || $count >= $number) {
            return [];
        }

        $contain['money']->tien_hoa_hong += $money;
        $contain['money']->save();
        $contain['sum_money'] = TongTienHoaHongModel::where('id_khachhang', $id)->first();
        if (empty($contain['sum_money'])) {
            $contain['sum_money']->tien_da_lanh += $money;
            $contain['sum_money']->save();
        }
        $count++;
        return $this->plusMoney($contain['money']->ma_code_cha, $money, $count, $number);
    }

    public function commission($id)
    {
        $contain['order'] = HoaDonModel::find($id);
        $contain['level'] = PhanCapHoaHongModel::find($contain['order']->phan_cap);
        $contain['customer'] = $contain['order']->id_kh;
        $contain['percent'] = $contain['level']->ti_le;
        $contain['number'] = $contain['level']->so_cap;
        $contain['order']->status = 2;
        $contain['order']->save();
        $contain['count'] = $this->manyLevel($contain['customer'], 0, $contain['number']);
        $contain['money_plus'] = $contain['percent'] / 100 * $contain['order']->tong_tien / $contain['number'];
//        if ($contain['count'] < $contain['number']) {
//            $contain['money_plus'] = $contain['percent'] / 100 * $contain['order']->tong_tien / $contain['count'];
//        } else {
//            $contain['money_plus'] = $contain['percent'] / 100 * $contain['order']->tong_tien / $contain['number'];
//        }
        $contain['money_customer'] = HoaHongKhachHangModel::where('user_id', $contain['customer'])->first();
        $contain['money_customer']->tien_hoa_hong += $contain['money_plus'];
        $contain['money_customer']->save();
        $contain['sum_money_customer'] = TongTienHoaHongModel::where('id_khachhang', $contain['customer'])->first();
        $contain['sum_money_customer']->tien_da_lanh += $contain['money_plus'];
        $contain['sum_money_customer']->save();
        $this->plusMoney($this->findFather($contain['customer']), $contain['money_plus'], 0, $contain['number'] - 1);
        return redirect(route('hoadon.index'));
    }
}
