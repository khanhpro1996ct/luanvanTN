<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            [
                'sp_ten' => 'required',
                'sp_so_luong' => 'required|numeric|min:0',
                'file' => 'required|image',
                'gia_goc' => 'required|numeric|min:0',
                'gia_km' => 'numeric',
            ];
    }

    public function messages()
    {
        return
            [
                'sp_ten.required' => 'Tên sản phẩm không được trống !',
                'sp_so_luong.required' => 'Số lượng không được trống !',
                'sp_so_luong.numeric' => 'Số lượng phải là số !',
                'sp_so_luong.min' => 'Số lượng thấp nhất là 0 !',
                'file.required' => 'Ảnh sản phẩm không được trống !',
                'file.image' => 'Không phải ảnh !',
                'gia_goc.required' => 'Giá bán không được trống !',
                'gia_goc.numeric' => 'Giá bán phải là số !',
                'gia_goc.min' => 'Giá bán thấp nhất là 0 vnđ !',
                'gia_km.numeric' => 'Giá khuyến mãi phải là số !',
            ];
    }
}
