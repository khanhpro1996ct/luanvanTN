@extends('adminlayouts.index')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item">Quản Lý Hóa Đơn</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản Lý Hóa Đơn</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Quản lý hóa đơn</h4>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                        Hóa đơn chưa duyệt &nbsp; <span style="color: red">{{ $sl_order_cd }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                        Hóa đơn đang vận chuyển &nbsp; <span
                                                style="color: red">{{ $sl_order_vc }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        Hóa đơn hoàn thành &nbsp;
                                        {{--<span style="color: red">{{ $sl_order_ht }}</span>--}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                        Hóa đơn hủy &nbsp;
                                        {{--<span style="color: red">{{ $sl_order_h }}</span>--}}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="home" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Danh Sách Khách Hàng</h4>
                                                    <table id="datatable1" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Stt</th>
                                                            <th>Mã hóa đơn</th>
                                                            <th>Tên</th>
                                                            <th>Sđt</th>
                                                            <th>Địa chỉ</th>
                                                            <th>SL sản phẩm</th>
                                                            <th>Tổng</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($order_cd as $item)
                                                            <tr>
                                                                <td>1</td>
                                                                <td><a href="">{{ $item->mahoadon }}</a></td>
                                                                <td>{{ $item->tennguoinhan }}</td>
                                                                <td>{{ $item->sdtnguoinhan }}</td>
                                                                <td>{{ $item->diachigiao }}</td>
                                                                <td>{{ count(\App\HoaDonChiTietModel::where('id_hoa_don',$item->idhoadon)->get()) }}
                                                                    : sản phẩm
                                                                </td>
                                                                <td>đ: {{ number_format($item->tongtien) }}</td>
                                                                <td>
                                                                    <a href="{{ route('VanChuyen',$item->idhoadon) }}"
                                                                       class="btn btn-outline-success waves-effect waves-light"
                                                                       onclick="return confirm('Bạn có chắc muốn duyệt hóa đơn này ?')">
                                                                        <i class="mdi mdi-car-wash"></i>
                                                                    </a>
                                                                    <a href="{{ route('HuyHD',$item->idhoadon) }}"
                                                                       class="btn btn-outline-danger waves-effect waves-light"
                                                                       onclick="return confirm('Bạn có chắc muốn hủy hóa đơn này ?')">
                                                                        <i class="mdi mdi-cart-off"></i>
                                                                    </a>
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
                                <div class="tab-pane p-3" id="profile" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Danh Sách Khách Hàng</h4>
                                                    <table id="datatable2" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Stt</th>
                                                            <th>Mã hóa đơn</th>
                                                            <th>Tên</th>
                                                            <th>Sđt</th>
                                                            <th>Địa chỉ</th>
                                                            <th>SL sản phẩm</th>
                                                            <th>Tổng</th>
                                                            <th>Trạng thái</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($order_vc as $item)
                                                            <tr>
                                                                <td>1</td>
                                                                <td><a href="">{{ $item->mahoadon }}</a></td>
                                                                <td>{{ $item->tennguoinhan }}</td>
                                                                <td>{{ $item->sdtnguoinhan }}</td>
                                                                <td>{{ $item->diachigiao }}</td>
                                                                <td>{{ count(\App\HoaDonChiTietModel::where('id_hoa_don',$item->idhoadon)->get()) }}
                                                                    : sản phẩm
                                                                </td>
                                                                <td>đ: {{ number_format($item->tongtien) }}</td>
                                                                <td style="color: green">Đang vận chuyển</td>
                                                                <td>
                                                                    <a href="{{ route('commission',$item->idhoadon) }}"
                                                                       class="btn btn-outline-primary waves-effect waves-light"
                                                                       onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                                        <i class="mdi mdi-cart-outline"></i>
                                                                    </a>
                                                                    <a href="{{ route('HuyHD',$item->idhoadon) }}"
                                                                       class="btn btn-outline-danger waves-effect waves-light"
                                                                       onclick="return confirm('Bạn chắc muốn hủy hóa đơn này ?')">
                                                                        <i class="mdi mdi-cart-off"></i>
                                                                    </a>
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
                                <div class="tab-pane p-3" id="messages" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Danh Sách Khách Hàng</h4>
                                                    <table id="datatable3" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Stt</th>
                                                            <th>Mã hóa đơn</th>
                                                            <th>Tên</th>
                                                            <th>Sđt</th>
                                                            <th>Địa chỉ</th>
                                                            <th>SL sản phẩm</th>
                                                            <th>Tổng</th>
                                                            <th>Trạng thái</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($order_ht as $item)
                                                            <tr>
                                                                <td>1</td>
                                                                <td><a href="">{{ $item->mahoadon }}</a></td>
                                                                <td>{{ $item->tennguoinhan }}</td>
                                                                <td>{{ $item->sdtnguoinhan }}</td>
                                                                <td>{{ $item->diachigiao }}</td>
                                                                <td>{{ count(\App\HoaDonChiTietModel::where('id_hoa_don',$item->idhoadon)->get()) }}
                                                                    : sản phẩm
                                                                </td>
                                                                <td>đ: {{ number_format($item->tongtien) }}</td>
                                                                <td style="color: green">
                                                                    <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                    Hoàn Thành
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
                                <div class="tab-pane p-3" id="settings" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title">Danh Sách Khách Hàng</h4>
                                                    <table id="datatable4" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Stt</th>
                                                            <th>Mã hóa đơn</th>
                                                            <th>Tên</th>
                                                            <th>Sđt</th>
                                                            <th>Địa chỉ</th>
                                                            <th>SL sản phẩm</th>
                                                            <th>Tổng</th>
                                                            <th>Trạng thái</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($order_h as $item)
                                                            <tr>
                                                                <td>1</td>
                                                                <td><a href="">{{ $item->mahoadon }}</a></td>
                                                                <td>{{ $item->tennguoinhan }}</td>
                                                                <td>{{ $item->sdtnguoinhan }}</td>
                                                                <td>{{ $item->diachigiao }}</td>
                                                                <td>{{ count(\App\HoaDonChiTietModel::where('id_hoa_don',$item->idhoadon)->get()) }}
                                                                    : sản phẩm
                                                                </td>
                                                                <td>đ: {{ number_format($item->tongtien) }}</td>
                                                                <td style="color: red">
                                                                    <i class="mdi mdi-delete-sweep"></i>
                                                                    Đã Hủy
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable1').DataTable();
            $('#datatable2').DataTable();
            $('#datatable3').DataTable();
            $('#datatable4').DataTable();
        });
    </script>
@endsection
}