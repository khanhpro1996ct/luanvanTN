<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhanCapHoaHongRequest;
use App\PhanCapHoaHongModel;

class PhanCapHoaHongController extends Controller
{
    public function index()
    {
        $data = PhanCapHoaHongModel::all();
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $data[$i]['stt'] = $i + 1;
        }
        return view('backend.phancap.index', compact('data'));
    }

    public function create()
    {
        return view('backend.phancap.create');
    }

    public function store(PhanCapHoaHongRequest $req)
    {
        $data = new PhanCapHoaHongModel();
        $data->so_cap = $req->get('so_cap');
        $data->ti_le = $req->get('ti_le');
        $data->status = 0;
        $data->save();
        return redirect(route('pchh.index'))->with('success', 'Thêm thành công !');
    }

    public function edit($id)
    {
        $pc = PhanCapHoaHongModel::where('id', $id)->first();
        return view('backend.phancap.edit', compact('pc'));
    }

    public function update(PhanCapHoaHongRequest $req, $id)
    {
        $pc = PhanCapHoaHongModel::find($id);
        $pc->so_cap = $req->get('so_cap');
        $pc->ti_le = $req->get('ti_le');
        $pc->save();
        return redirect(route('pchh.index'))->with('success', 'Cập nhật thành công !');
    }

    public function destroy($id)
    {
        PhanCapHoaHongModel::find($id)->delete();
        return redirect(route('pchh.index'))->with('success', 'Xóa thành công !');
    }

    public function status($id)
    {
        $item = PhanCapHoaHongModel::find($id);
        if ($item->status == 0) {
            $item->status = 1;
        }
        $item->save();
        PhanCapHoaHongModel::where('id', '<>', $id)->update(['status' => 0]);
        return redirect(route('pchh.index'));
    }
}
