@extends('adminlayouts.index')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item">Quản Lý Danh Mục</li>
                                <li class="breadcrumb-item active">danh sách</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quản Lý Danh Mục</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <a style="float: right" class="btn btn-outline-primary waves-effect waves-light">Thêm mới</a>
                            <h4 class="mt-0 header-title">Danh Sách Danh Mục</h4>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Danh Mục Sản Phẩm</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>Pre-Sales Support</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection