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
                                        Hóa đơn chưa duyệt
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                        Hóa đơn đang vận chuyển
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        Hóa đơn hoàn thành
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                        Hóa đơn hủy
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
                                                            <th>Tổng</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Pre-11 d</td>
                                                            <td>New d</td>
                                                            <td>d</td>
                                                            <td>d/12/12</td>
                                                            <td>d,450</td>
                                                            <td>d,450</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-3" id="profile" role="tabpanel">
                                    <p class="font-14 mb-0">
                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                        single-origin coffee squid. Exercitation +1 labore velit, blog
                                        sartorial PBR leggings next level wes anderson artisan four loko
                                        farm-to-table craft beer twee. Qui photo booth letterpress,
                                        commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                        vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                        aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                        vero magna velit sapiente labore stumptown. Vegan fanny pack
                                        odio cillum wes anderson 8-bit.
                                    </p>
                                </div>
                                <div class="tab-pane p-3" id="messages" role="tabpanel">
                                    <p class="font-14 mb-0">
                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                        sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                        farm-to-table readymade. Messenger bag gentrify pitchfork
                                        tattooed craft beer, iphone skateboard locavore carles etsy
                                        salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                        mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                        retro mlkshk vice blog. Scenester cred you probably haven't
                                        heard of them, vinyl craft beer blog stumptown. Pitchfork
                                        sustainable tofu synth chambray yr.
                                    </p>
                                </div>
                                <div class="tab-pane p-3" id="settings" role="tabpanel">
                                    <p class="font-14 mb-0">
                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                        art party before they sold out master cleanse gluten-free squid
                                        scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                        art party locavore wolf cliche high life echo park Austin. Cred
                                        vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                        farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                        mustache readymade thundercats keffiyeh craft beer marfa
                                        ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                        vegan.
                                    </p>
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