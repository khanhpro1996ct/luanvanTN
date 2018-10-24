<!DOCTYPE html>
<html>
@include('userlayouts.thehead')

<style>
    .labelnew {
        margin-bottom: 5px;
        font-weight: 600;
        font-size: 14px;
    }

    .imgnew {
        width: 100px;
        height: 100px;
        margin: auto;
        border-radius: 30px;
    }
</style>

<body>

<!-- header -->
@include('userlayouts.header')
<!-- //header -->

<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Trang chủ</a><span>|</span></li>
            <li>Đăng nhập & Đăng ký</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->

<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a style="color: red"><b>Danh Mục Sản Phẩm</b></a></li>
                    @foreach($data as $val)
                        <li><a href="">{{ $val->dm_ten }}</a></li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- login -->
        <div class="w3_login">
            <h3>Đăng Nhập</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">Đăng Ký</div>
                    </div>
                    <div class="form">
                        <h2>Đăng nhập tài khoản của bạn</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <label class="labelnew"><span style="color: red;">(*)</span> Số điện thoại :</label>
                            <input type="text" name="phone" placeholder="Số điện thoại" required=" ">
                            <label class="labelnew"><span style="color: red;">(*)</span> Mật khẩu :</label>
                            <input type="password" name="password" placeholder="Mật khẩu" required=" ">
                            <input type="submit" value="Đăng Nhập">
                        </form>
                    </div>
                    <div class="form">
                        <h2>Đăng ký tài khoản mới</h2>
                        <form action="#" method="post">
                            @csrf
                            <label class="labelnew"><span style="color: red;">(*)</span> Số điện thoại :</label>
                            <input value="{{ old('phone') }}" type="text" name="phone" placeholder="Số điện thoại"
                                   required=" ">

                            <label class="labelnew"><span style="color: red;">(*)</span> Mật khẩu :</label>
                            <input type="password" name="password" placeholder="Mật khẩu" required=" ">

                            <label class="labelnew"><span style="color: red;">(*)</span> Nhập lại mật khẩu :</label>
                            <input type="password" name="repassword" placeholder="Mật khẩu" required=" ">

                            <label class="labelnew"><span style="color: red;">(*)</span> Tên người dùng :</label>
                            <input value="{{ old('kh_ten') }}" type="email" name="kh_ten" placeholder="Tên người dùng"
                                   required=" ">

                            <label class="labelnew"><span style="color: red;">(*)</span> Địa chỉ email :</label>
                            <input value="{{ old('email') }}" type="text" name="email" placeholder="Địa chỉ email"
                                   required=" ">

                            <label class="labelnew">Địa chỉ :</label>
                            <input value="{{ old('kh_dia_chi') }}" type="text" name="kh_diachi" placeholder="Địa chỉ"
                                   required=" ">

                            <label class="labelnew">CMND :</label>
                            <input value="{{ old('kh_cmnd') }}" type="text" name="kh_cmnd" placeholder="cmnd"
                                   required=" ">

                            <label class="labelnew" style="width: 100%;">Ngày CMND :</label>
                            <input value="{{ old('kh_ngay_cap') }}" style="width: 100%;" type="date" name="kh_ngay_cap"
                                   required=" ">

                            <br>
                            <br>
                            <label class="labelnew">Mã người giới thiệu :</label>
                            <p class="help-block" style="font-size: 12px;color: red;">
                                Lưu ý: Nhập chính xác mã người giới thiệu.
                            </p>
                            <input type="text" name="kh_code" required=" ">

                            <label class="labelnew" style="width: 100%;">Ảnh đại diện :</label>
                            <div style="display: flex;">
                                <img class="imgnew" id="avatar" src="{{url('upload')}}/image.png" alt="your image"/>
                            </div>
                            <br>
                            <input type='file' name="file" onchange="readURL(this)"/>

                            <hr>
                            <div style="display: -webkit-box;">
                                <input id="checbox" type="checkbox" name="checkbox">
                                <div style="font-size: 13px;margin-left: 5px;">
                                    Tôi đồng ý với <a href="">Chính sách bảo mật của Chúng Tôi.</a>
                                </div>
                            </div>
                            <br>
                            <input disabled id="btnsm" type="submit" value="Đăng Ký">
                        </form>
                    </div>
                    <div class="cta">
                        <a style="text-decoration: underline;" href="#">Quên mật khẩu ? </a>
                        <span>  |  </span>
                        <a style="text-decoration: underline;color: red" href="{{ route('gh.resgiterGH') }}"> Đăng ký
                            gian hàng !</a>
                    </div>
                </div>
            </div>
            <script>
                $('.toggle').click(function () {
                    // Switches the Icon
                    $(this).children('i').toggleClass('fa-pencil');
                    // Switches the forms
                    $('.form').animate({
                        height: "toggle",
                        'padding-top': 'toggle',
                        'padding-bottom': 'toggle',
                        opacity: "toggle"
                    }, "slow");
                });
            </script>
        </div>
        <!-- //login -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->

<!-- footer -->
@include('userlayouts.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
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
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
<script src="{{ url('userlayouts/webuser/js/minicart.js') }}"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
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
    document.getElementById('checbox').onclick = function (e) {
        if (this.checked) {
            $('#btnsm').attr('disabled', false);
            alert("Tôi đồng ý với Chính sách bảo mật của Chúng Tôi ?");
        }
        else {
            $('#btnsm').attr('disabled', true);
        }
    };

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
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
</body>
</html>