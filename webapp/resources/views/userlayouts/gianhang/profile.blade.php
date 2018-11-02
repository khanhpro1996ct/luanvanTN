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
            <li title="Trang chủ"><i class="fa fa-home" aria-hidden="true"></i><a href="{{ url('user') }}">Trang chủ</a><span>|</span>
            </li>
            <li title="Thông tin gian hàng"><a href="{{ route('gh.profileGianHang') }}">Gian
                    hàng @if(!empty(Auth::user()))
                        : {{ Auth::user()->phone }}@else:@endif</a><span>|</span></li>
            <li title="Quản lý sản phẩm"><a href="{{ url('gian-hang/quan-ly-san-pham') }}">Quản lý sản
                    phẩm</a><span>|</span></li>
            <li title="Thông tin gian hàng">Thông tin gian hàng</li>
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
    <div class="w3l_banner_nav_right">
        <div class="w3_login" style="padding-top: 1em">
            <h3 style="font-size: 26px;">Thông Tin Gian Hàng</h3>
            <div class="w3_login_module">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>Tên Shop</p>
                            <p>Số điện thoại</p>
                            <p>Email</p>
                            <p>Địa chỉ</p>
                            <p>Tiền lợi nhuận đã tích lũy</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $data['gh_ten'] }}</p>
                            <p>{{ $data['phone'] }}</p>
                            <p>{{ $data['email'] }}</p>
                            <p>{{ $data['gh_dia_chi'] }}</p>
                            <p>{{ $data['gh_tien_loi_nhuan'] }} vnđ</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div><b>Danh sách lợi nhuận đã thanh toán</b></div>
                        <br>
                        <table class="table table-bordered khanh">
                            <thead>
                            <tr>
                                <th class="khanh">Stt</th>
                                <th class="khanh">Ngày thanh toán</th>
                                <th class="khanh">Số tiền đã thanh toán</th>
                                <th class="khanh">Ai thanh toán</th>
                                <th class="khanh">Ghi chú</th>
                                <th class="khanh"></th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@include('userlayouts.footer')
<script src="{{ url('userlayouts/webuser/js/bootstrap.min.js') }}"></script>
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
        }
    }
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
</body>
</html>