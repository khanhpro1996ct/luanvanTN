<!DOCTYPE html>
<html>
@include('userlayouts.thehead')

<style>
    .khanh {
        color: black !important;
        border-bottom: 1px solid !important;
    }

    .khanh1 {
        color: black !important;
        border: 0.5px solid !important;
    }

    .rownew {
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>
<body>
@include('userlayouts.header')
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="{{ url('user') }}">Trang chủ</a>
                <span>|</span>
            </li>
            <li><a href="{{ route('gh.profileGianHang') }}">Gian hàng @if(!empty(Auth::user()))
                        : {{ Auth::user()->phone }}@else:@endif</a><span>|</span></li>
            <li><a href="{{ url('gian-hang/quan-ly-san-pham') }}">Quản lý sản phẩm</a><span>|</span></li>
            <li>Danh sách sản phẩm</li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="w3l_banner_nav_left">
        <br>
        <nav class="navbar nav_bottom">
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a style="color: red"><b>Quản Lý Sản Phẩm</b></a></li>
                    <li><a href="{{ route('gh.qlsanpham') }}">Danh sách sản phẩm</a></li>
                    <li><a href="{{ route('gh.tmsanpham') }}">Thêm sản phẩm mới</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="w3l_banner_nav_right" style="margin-bottom: 15px;">
        <div class="w3_login_module">
            <div class="row rownew">
                <div class="col-md-12">
                    <table id="datatable" class="table table-bordered khanh">
                        <thead>
                        <tr>
                            <th class="khanh">Stt</th>
                            <th class="khanh">Danh mục</th>
                            <th class="khanh">Tên sản phẩm</th>
                            <th class="khanh">Giá bán</th>
                            <th class="khanh">Giá khuyến mãi</th>
                            <th class="khanh">SL còn lại</th>
                            <th class="khanh">Ảnh</th>
                            <th class="khanh"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $val)
                            <tr>
                                <td class="khanh1">{{ $val->stt }}</td>
                                <td class="khanh1">{{ $val->dm_ten }}</td>
                                <td class="khanh1">{{ $val->sp_ten }}</td>
                                <td class="khanh1">{{ number_format($val->gia_goc) }} vnđ</td>
                                <td class="khanh1">{{ number_format($val->gia_km) }} vnđ</td>
                                <td class="khanh1">{{ $val->sp_so_luong }}</td>
                                <td class="khanh1">
                                    <img src="{{url('upload')}}/{{ $val->sp_image }}" width="30px" height="30px"
                                         alt="No image">
                                </td>
                                <td class="khanh1">
                                    <a href="{{ route('gh.cnsanpham',$val->id) }}" class="btn btn-warning">Sửa</a>
                                    <a href="{{ route('gh.xsanphamDestroy',$val->id) }}"
                                       class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@include('userlayouts.footer')


<!-- DataTables -->
<link href="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}"
      rel="stylesheet" type="text/css"/>
<link href="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
      type="text/css"/>

<!-- Responsive datatable examples -->
<link href="{{ url('adminlayouts/horizontal/assets/plugins/datatables/responsive.bootstrap4.min.css') }}"
      rel="stylesheet" type="text/css"/>

<!-- Required datatable js -->
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>

<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

{{--<script src="{{ url('userlayouts/webuser/js/bootstrap.min.js') }}"></script>--}}
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<script src="{{ url('userlayouts/webuser/js/minicart.js') }}"></script>
<script>
    paypal.minicart.render();
    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }
        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#avatar").attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            console.log(document.getElementById('fileAvatar').value);
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
</body>
</html>