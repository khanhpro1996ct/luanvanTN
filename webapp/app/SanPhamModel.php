<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPhamModel extends Model
{
    protected $table = 'san_pham';
    protected $primarykey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id',
        'id_gian_hang',
        'id_danh_muc',
        'sp_ten',
        'sp_so_luong',
        'sp_image',
        'created_at',
        'updated_at',
    ];
}
