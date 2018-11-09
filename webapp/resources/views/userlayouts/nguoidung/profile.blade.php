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
    @include('userlayouts.category')
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