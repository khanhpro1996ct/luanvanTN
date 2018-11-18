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
                            <span class="counter text-danger">15852</span>
                            Đơn hàng
                        </div>
                        <p class="mb-0 m-t-20 text-muted">Tổng tiền đơn hàng: $22506</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-success">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-currency-usd text-success"></i>
                        </span>
                        <div class="mini-stat-info text-right text-white">
                            <span class="counter text-white">956</span>
                            Hoa hồng
                        </div>
                        <p class="mb-0 m-t-20 text-light">Tổng tiền hoa hồng: $22506</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-white">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-cube-outline text-warning"></i>
                        </span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class="counter text-warning">5210</span>
                            Người dùng
                        </div>
                        <p class="mb-0 m-t-20 text-muted">Tổng người dùng: $22506</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-info">
                        <span class="mini-stat-icon bg-light">
                            <i class="mdi mdi-currency-btc text-info"></i>
                        </span>
                        <div class="mini-stat-info text-right text-light">
                            <span class="counter text-white">20544</span>
                            Gian hàng
                        </div>
                        <p class="mb-0 m-t-20 text-light">Tổng doanh thu: $22506</p>
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
                                    <th>Giới Tính</th>
                                    <th>Ngày Sinh</th>
                                    <th>SĐT</th>
                                    <th>Địa Chỉ</th>
                                    <th>Email</th>
                                    <th>$ Tích Lũy</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($khachhang as $value)
                                    <tr>
                                        <td>{{ $value['kh_ten'] }}</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                        <td>$106,450</td>
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
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection