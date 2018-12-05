@extends('adminlayouts.index')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a>Quản Trị Viên</a></li>
                                <li class="breadcrumb-item active">Trang chủ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Trang chủ</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-white">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-cart-outline text-danger"></i>
                        </span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class="counter text-danger">{{ $order }}</span>
                            Đơn hàng
                        </div>
                        <p class="mb-0 m-t-20 text-muted">Tổng tiền đơn hàng: đ:{{ number_format($tongtien) }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-success">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-currency-usd text-success"></i>
                        </span>
                        <div class="mini-stat-info text-right text-white">
                            <span class="counter text-white">đ: 956,000</span>
                            Hoa hồng
                        </div>
                        <p class="mb-0 m-t-20 text-light">Hoa hồng thanh toán: đ: {{$tong_hoa_hong}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-white">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-cube-outline text-warning"></i>
                        </span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class="counter text-warning">{{ $nguoidung }}</span>
                            Người dùng
                        </div>
                        <p class="mb-0 m-t-20 text-muted">Người dùng thông thường: {{ $nguoidungthuong }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-info">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-currency-btc text-info"></i>
                        </span>
                        <div class="mini-stat-info text-right text-light">
                            <span class="counter text-white">{{ $gianhang }}</span>
                            Gian hàng
                        </div>
                        <p class="mb-0 m-t-20 text-light">Gian hàng kinh doanh: {{ $gianhangkinhdoanh }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Danh Sách Khách Hàng</h4>
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Họ & Tên</th>
                                    <th>SĐT</th>
                                    <th>Người GT</th>
                                    <th>Code</th>
                                    <th>$ Tích Lũy</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($khachhang as $value)
                                    <tr>
                                        <td><a href="" data-toggle="modal"
                                               data-target=".bs-example-modal-center">{{ $value->kh_ten }}</a></td>
                                        <td>{{ $value->phone }}</td>
                                        <td style="text-align: center">
                                            @if(!empty($value->ma_code_cha))
                                                {{ \App\UsersModel::join('users_profile', 'users_profile.user_id', '=', 'users.id')
                                                    ->where('id', '=', $value->ma_code_cha)
                                                    ->select('users_profile.kh_ten as kh_ten')
                                                    ->get()
                                                    ->first()->kh_ten }}
                                            @else
                                                <span style="color: red"><i class="mdi mdi-block-helper"></i></span>
                                            @endif
                                        </td>
                                        <td>{{ $value->code }}</td>
                                        <td>đ: {{ number_format($value->tien_hoa_hong) }}</td>
                                        <td>
                                            @if($value->active == 1)
                                                <a href="{{ route('KhoaTK',$value->id) }}"
                                                   class="btn btn-outline-primary waves-effect waves-light"
                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                    <i class="mdi mdi-key-variant"></i>
                                                </a>
                                            @else
                                                <a class="btn btn-outline-danger waves-effect waves-light">
                                                    <i class="mdi mdi-block-helper"></i>
                                                </a>
                                            @endif
                                            @if($value->tien_hoa_hong == 0)
                                                <a class="btn btn-outline-danger waves-effect waves-light">
                                                    <i class="mdi mdi-cash-usd"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('ThanhToanHH',$value->id) }}"
                                                   class="btn btn-outline-success waves-effect waves-light"
                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                    <i class="mdi mdi-cash-usd"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Thông tin chi tiết</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div style="width: 100%; text-align: center">
                        <div>
                            Mã Giới Thiệu:<span style="color: red"> 5C01E245308EB</span>
                        </div>
                    </div>
                    <div style="text-align: center; width: 100%">
                        <img style="width: 60px;height: 60px;border-radius: 68px;" src="{{ url('upload/img-5.jpg') }}">
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Họ & Tên: Cao Thị Tươi</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Số Điện Thoại: 0971703022</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Email: tuoi2234@gmail.com</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Giới Tinh: Nữ</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Ngày Sinh: 21-11-1996</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Số CMND: 362449235</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Ngày Cấp: 11/2/2011</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Địa chỉ: 6Y/1 Bình Thủy, Ninh Kiều, TP Cần Thơ</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Người Giới Thiệu: Trần Thanh Tâm</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        <span>Hoa Hồng: đ: 178,000</span>
                    </div>
                    <div style="width: 100% ; text-align: center;margin: 10px;">
                        Trạng Thái<span style="color: green">: Không khóa</span>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection