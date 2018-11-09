<div class="agileits_header">
    <div class="w3l_offers">
        <a href="{{ url('user') }}">Hãy đến với chúng tôi !</a>
    </div>
    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="Tìm kiếm sản phẩm..." onfocus="this.value = '';"
                   onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="#" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart"/>
                <input type="hidden" name="display" value="1"/>
                <input type="submit" name="submit" value="Xem giỏ hàng" class="button"/>
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @if(!empty(Auth::user()))
                        {{ Auth::user()->phone }}
                    @else
                    @endif<i class="fa fa-user" aria-hidden="true"></i>
                    <span class="caret"></span>
                </a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            @if(!empty(Auth::user()))
                                <li>
                                    <a href="{{ route('gh.profileGianHang') }}">
                                        <i class="fa fa-phone"></i>
                                        {{ Auth::user()->phone }}
                                    </a>
                                </li>
                                @if(Auth::user()->role == 1)
                                    <li>
                                        <a href="{{ route('gh.profileGianHang') }}">
                                            <i class="fa fa-user"></i> Profile
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('nd.profileND') }}">
                                            <i class="fa fa-user"></i> Profile
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </li>
                            @else
                                <li><a href="{{ url('user/login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="{{ url('user/login') }}">Đăng ký ngay !</a></h2>
    </div>
    <div class="clearfix"></div>
</div>
<script>
    $(document).ready(function () {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function () {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="{{ url('user') }}"><span>Shop</span> LVTN</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                @if(!empty(Auth::user()) && (Auth::user()->role == 1))
                    <li>
                        <a href="{{ route('gh.qlsanpham') }}">Quản lý sản phẩm</a><i>/</i>
                    </li>
                @else
                @endif
                <li><a href="about.html">Lợi nhuận</a><i>/</i></li>
                <li><a href="about.html">Về chúng tôi</a><i>/</i></li>
                <li><a href="products.html">Sản phẩm ưu đãi</a><i>/</i></li>
                <li><a href="services.html">Dịch vụ</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+84) 972 705 703</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:nqkhanh@gmail.com">nqkhanh@gmail.com</a>
                <li><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/khanh1996ct">https://www.facebook.com/khanh1996ct</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>