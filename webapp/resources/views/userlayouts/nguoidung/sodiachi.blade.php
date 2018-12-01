<!DOCTYPE html>
<html>
@include('userlayouts.thehead')
<body>
@include('userlayouts.header')
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li title="Trang chủ">
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="{{ url('user') }}">Trang chủ</a>
                <span>|</span>
            </li>
            <li>Sổ địa chỉ</li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a style="color: red">
                            <b>Xin chào
                                {{ \App\NguoiDungModel::where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->get()->first()->kh_ten }}
                            </b>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profileCaNhan') }}">Thông tin cá nhân</a>
                        <a href="#">Đơn hàng của tôi</a>
                        <a href="{{ route('SoDiaChi') }}">Sổ địa chỉ</a>
                        <a href="#">Mã giảm giá</a>
                        <a href="#">Thông báo của tôi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- about -->
        {{--{{ dd($order) }}--}}
        <form action="{{ route('orderStore') }}" method="post">
            @csrf
            <div class="privacy about">
                <h3>Sổ địa chỉ</h3>
                <div class="checkout-right">
                    <h4>Lưu địa chỉ thanh toán và giao hàng</h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket"></div>
                    <div class="col-md-8 address_form_agile">
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <button class="submit check_out" style="text-transform: none">+ Thêm địa chỉ mới</button>
                            </div>
                        </section>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_left">
            <h3>Đăng ký nhận bản tin của chúng tôi</h3>
        </div>
        <div class="w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email của bạn là" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="Đăng ký">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@include('userlayouts.footer')
@if(\Illuminate\Support\Facades\Session::get('clear_session')==1)
    <script>
        sessionStorage.clear();
    </script>
@endif
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