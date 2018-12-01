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
            <li title="Thông tin cá nhân">
                <a href="{{ route('nd.profileND') }}">SĐT
                    @if(!empty(Auth::user())): {{ Auth::user()->phone }}
                    @else:
                    @endif
                </a>
                <span>|</span>
            </li>
            <li>Thông tin cá nhân</li>
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
        <div class="w3_login" style="padding-top: 1em">
            <h3 style="font-size: 26px;">Thông tin cá nhân</h3>
            <div class="w3_login_module">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p></p>
                            <p>Số điện thoại</p>
                            <p>Email</p>
                            <p>Địa chỉ</p>
                            <p>Tiền lợi nhuận đã tích lũy</p>
                        </div>
                        <div class="col-md-6">
                            <p></p>
                            <p>{{ $user['phone'] }}</p><br>
                            <p>{{ $user['email'] }}</p><br>
                            <p>{{ $user['diachi'] }}</p><br>
                            <p>{{ $user['tienhoahong'] }}</p><br>
                            <p>{{ $user['code'] }}</p><br>
                            <p>{{ $user['ten'] }}</p><br>
                            <p>{{ $user['gioitinh'] }}</p><br>
                            <p>{{ $user['ngaysinh'] }}</p><br>
                            <p>{{ $user['ngaycap'] }}</p><br>
                            <p>{{ $user['cmnd'] }}</p><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div><b>Danh sách lịch sử mua hàng</b></div>
                        <br>
                        <table class="table table-bordered khanh">
                            <thead>
                            <tr>
                                <th class="khanh">Stt</th>
                                <th class="khanh">Mã HĐ</th>
                                <th class="khanh">Họ & tên</th>
                                <th class="khanh">Số điện thoại</th>
                                <th class="khanh">Địa chỉ</th>
                                <th class="khanh">Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $item)
                                <tr>
                                    <td>{{ $item->stt }}</td>
                                    <td>{{ $item->mahoadon }}</td>
                                    <td>{{ $item->hoten }}</td>
                                    <td>{{ $item->sdt }}</td>
                                    <td>{{ $item->diachi }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
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