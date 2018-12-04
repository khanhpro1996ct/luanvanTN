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
                                        Hóa đơn chưa duyệt &nbsp; <span style="color: red">3</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                        Hóa đơn đang vận chuyển &nbsp; <span style="color: red">2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        Hóa đơn hoàn thành &nbsp; <span style="color: red">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                        Hóa đơn hủy &nbsp; <span style="color: red">1</span>
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
                                                    <table id="datatable" class="table table-bordered">
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="">62935000</a></td>
                                                            <td>Quốc Khánh</td>
                                                            <td>0972705703</td>
                                                            <td>6A An Khánh, Ninh Kiều, TP Cần Thơ</td>
                                                            <td>4 : sản phẩm</td>
                                                            <td>đ: 450,000</td>
                                                            <td>
                                                                <a href=""
                                                                   class="btn btn-outline-success waves-effect waves-light"
                                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                                    <i class="mdi mdi-car-wash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="">62935000</a></td>
                                                            <td>Kim Tuyết</td>
                                                            <td>0362653853</td>
                                                            <td>6A Thới Long, Ô Môn, TP Cần Thơ</td>
                                                            <td>4 : sản phẩm</td>
                                                            <td>đ: 98,000</td>
                                                            <td>
                                                                <a href=""
                                                                   class="btn btn-outline-success waves-effect waves-light"
                                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                                    <i class="mdi mdi-car-wash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="">66235352</a></td>
                                                            <td>Văn Quyết</td>
                                                            <td>0934642874</td>
                                                            <td>51/I An Khánh, Cái Răng, TP Cần Thơ</td>
                                                            <td>3 : sản phẩm</td>
                                                            <td>đ: 130,000</td>
                                                            <td>
                                                                <a href=""
                                                                   class="btn btn-outline-success waves-effect waves-light"
                                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                                    <i class="mdi mdi-car-wash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
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
                                                    <table id="datatable" class="table table-bordered">
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="">629854200</a></td>
                                                            <td>Khánh An</td>
                                                            <td>0972705701</td>
                                                            <td>6A Long Hưng, Ô Môn, TP Cần Thơ</td>
                                                            <td>7 : sản phẩm</td>
                                                            <td>đ: 890,000</td>
                                                            <td style="color: green">Đang vận chuyển</td>
                                                            <td>
                                                                <a href=""
                                                                   class="btn btn-outline-danger waves-effect waves-light"
                                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                                    <i class="mdi mdi-cart-outline"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="">62935000</a></td>
                                                            <td>Tuyết</td>
                                                            <td>0978432433</td>
                                                            <td>632 Thới Long, Ô Môn, TP Cần Thơ</td>
                                                            <td>4 : sản phẩm</td>
                                                            <td>đ: 98,000</td>
                                                            <td style="color: green">Đang vận chuyển</td>
                                                            <td>
                                                                <a href=""
                                                                   class="btn btn-outline-danger waves-effect waves-light"
                                                                   onclick="return confirm('Bạn chắc muốn khóa tài khoản này ?')">
                                                                    <i class="mdi mdi-cart-outline"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
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
                                                    <table id="datatable" class="table table-bordered">
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="">783637192</a></td>
                                                            <td>Thị Tươi</td>
                                                            <td>0964625832</td>
                                                            <td>378 Xã Thới Thạnh, Huyện Thới Lai, TP Cần Thơ</td>
                                                            <td>1 : sản phẩm</td>
                                                            <td>đ: 35,000</td>
                                                            <td style="color: green">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                Hoàn Thành
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="">425729853</a></td>
                                                            <td>Tuyết Mai</td>
                                                            <td>0978432433</td>
                                                            <td>632 Phường Thuận Hưng, Thốt Nốt, TP Cần Thơ</td>
                                                            <td>2 : sản phẩm</td>
                                                            <td>đ: 78,000</td>
                                                            <td style="color: green">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                Hoàn Thành
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="">425726346</a></td>
                                                            <td>Hưng</td>
                                                            <td>0963556235</td>
                                                            <td>632 Thới Long, Ô Môn, TP Cần Thơ</td>
                                                            <td>4 : sản phẩm</td>
                                                            <td>đ: 132,000</td>
                                                            <td style="color: green">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                Hoàn Thành
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td><a href="">523512254</a></td>
                                                            <td>Hải</td>
                                                            <td>094762762</td>
                                                            <td>632 An Phú, Ninh Kiều, TP Cần Thơ</td>
                                                            <td>3 : sản phẩm</td>
                                                            <td>đ: 98,000</td>
                                                            <td style="color: green">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                Hoàn Thành
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td><a href="">62935000</a></td>
                                                            <td>Tuyết</td>
                                                            <td>0978432433</td>
                                                            <td>632 Thới Long, Ô Môn, TP Cần Thơ</td>
                                                            <td>8 : sản phẩm</td>
                                                            <td>đ: 98,000</td>
                                                            <td style="color: green">
                                                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                Hoàn Thành
                                                            </td>
                                                        </tr>
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
                                                    <table id="datatable" class="table table-bordered">
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="">78363722</a></td>
                                                            <td>Khánh</td>
                                                            <td>0972705703</td>
                                                            <td>378 Xã Thới Thạnh, Huyện Thới Lai, TP Cần Thơ</td>
                                                            <td>1 : sản phẩm</td>
                                                            <td>đ: 35,000</td>
                                                            <td style="color: red">
                                                                <i class="mdi mdi-delete-sweep"></i>
                                                                Đã Hủy
                                                            </td>
                                                        </tr>
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
            $('#datatable').DataTable();
        });
    </script>
@endsection