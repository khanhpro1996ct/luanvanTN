<!DOCTYPE HTML>
<html>
<head>
    <title>LVTN - User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shape Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ url('userlayouts/web/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('userlayouts/web/js/simpleCart.min.js') }}"> </script>
    <script src="{{ url('userlayouts/web/js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ url('userlayouts/web/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <script src="{{ url('userlayouts/web/js/jquery.easydropdown.js') }}"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src="{{ url('userlayouts/web/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <link href="{{ url('userlayouts/web/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="#"><img src="{{ url('userlayouts/web/images/logo.png') }}" alt=""/></a>
            </div>
            <div class="header_right">
                <ul class="social">
                    <li><a href=""> <i class="fb"> </i></a></li>
                    <li><a href=""><i class="tw"> </i> </a></li>
                    <li><a href=""><i class="utube"> </i> </a></li>
                    <li><a href=""><i class="pin"> </i> </a></li>
                    <li><a href=""><i class="instagram"> </i> </a></li>
                </ul>
                <div class="lang_list">
                    <select tabindex="4" class="dropdown">
                        <option value="" class="label" value="">Vi</option>
                        <option value="1">Tiếng Việt</option>
                        <option value="2">English</option>
                        <option value="3">French</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="banner_wrap">
            <div class="bannertop_box">
                <ul class="login">
                    <li class="login_text"><a href="#">Đăng nhập</a></li>
                    <div class='clearfix'></div>
                </ul>
                <div class="cart_bg">
                    <ul class="cart">
                        <a href="#">
                            <h4><i class="cart_icon"> </i><p>Giỏ hàng: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> sp)</p><div class="clearfix"> </div></h4>
                        </a>
                        <h5 class="empty"><a href="javascript:;" class="simpleCart_empty">Trống</a></h5>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <ul class="quick_access">
                    <li class="view_cart"><a href="#">Xem giỏ hàng</a></li>
                    <li class="check"><a href="#">Kiểm tra</a></li>
                    <div class='clearfix'></div>
                </ul>
                <div class="search">
                    <input type="text" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
                <div class="welcome_box">
                    <h2>Chào mừng bạn đã đến với chúng tôi</h2>
                    <p>Mua hàng tích lũy hoa hồng</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="content_box">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="menu_box">
                        <h3 class="menu_head">Menu</h3>
                        <ul class="nav">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Đăng ký gian hàng</a></li>
                            <li><a href="#">Đăng ký tài khoản</a></li>
                            <li><a href="#">Khuyến mãi</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="tags">
                        <h4 class="tag_head">Danh mục Sản phẩm</h4>
                        <ul class="tags_links">
                            <li><a href="#">Thiết bị điện tử</a></li>
                            <li><a href="#">Phụ kiện điện tử</a></li>
                            <li><a href="#">TV & thiết bị gia dụng</a></li>
                            <li><a href="#">Sức khỏe & Làm đẹp</a></li>
                            <li><a href="#">Hàng Mẹ, Bé & Đồ chơi</a></li>
                            <li><a href="#">Siêu thị tập hóa</a></li>
                            <li><a href="#">Hàng gia dụng & đời sống</a></li>
                            <li><a href="#">Thời trang nam</a></li>
                            <li><a href="#">Thời trang nữ</a></li>
                            <li><a href="#">Phụ kiện thời trang</a></li>
                            <li><a href="#">Thể thao & du lịch</a></li>
                            <li><a href="#">Ôtô, Xe máy & Thiết bị định vị</a></li>
                        </ul>
                    </div>
                    <div class="side_banner">
                    <div class="banner_img"><img src="userlayouts/web/images/pic9.jpg" class="img-responsive" alt=""/></div>
                    <div class="banner_holder">
                    <h3>Now <br> is <br> Open!</h3>
                    </div>
                    </div>
                    {{--<div class="tags">--}}
                        {{--<h4 class="tag_head">Articles Experts</h4>--}}
                        {{--<ul class="article_links">--}}
                            {{--<li><a href="#">Eleifend option congue nihil</a></li>--}}
                            {{--<li><a href="#">Investigationes demonst</a></li>--}}
                            {{--<li><a href="#">Qui sequitur mutationem</a></li>--}}
                            {{--<li><a href="#">videntur parum clar sollemnes</a></li>--}}
                            {{--<li><a href="#">ullamcorper suscipit lobortis</a></li>--}}
                            {{--<li><a href="#">commodo consequat. Duis autem</a></li>--}}
                            {{--<li><a href="#">Investigationes demonst</a></li>--}}
                            {{--<li><a href="#">ullamcorper suscipit lobortis</a></li>--}}
                            {{--<li><a href="#">Qui sequitur mutationem</a></li>--}}
                            {{--<li><a href="#">videntur parum clar sollemnes</a></li>--}}
                            {{--<li><a href="#">ullamcorper suscipit lobortis</a></li>--}}
                        {{--</ul>--}}
                        {{--<a href="#" class="link1">View all</a>--}}
                    {{--</div>--}}
                </div>
                <div class="col-md-9">
                    <h3 class="m_1">Sản Phẩm Mới</h3>
                    <div class="content_grid">
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic1.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic2.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="sale-box1"><span class="on_sale1 title_shop">SALE</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic3.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="content_grid">
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic4.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic5.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic6.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <h3 class="m_2">Sảm Phẩm Khuyến mãi</h3>
                    <div class="content_grid">
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic7.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic8.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="userlayouts/web/images/pic13.jpg" class="img-responsive" alt=""/>
                                        <a href="" class="button item_add item_1"> </a>
                                        <div class="product_container">
                                            <div class="cart-left">
                                                <p class="title">Lorem Ipsum 2015</p>
                                            </div>
                                            <span class="amount item_price">$45.00</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="brands">
            <ul class="brand_icons">
                <li><img src='userlayouts/web/images/icon1.jpg' class="img-responsive" alt=""/></li>
                <li><img src='userlayouts/web/images/icon2.jpg' class="img-responsive" alt=""/></li>
                <li><img src='userlayouts/web/images/icon3.jpg' class="img-responsive" alt=""/></li>
                <li><img src='userlayouts/web/images/icon4.jpg' class="img-responsive" alt=""/></li>
                <li><img src='userlayouts/web/images/icon5.jpg' class="img-responsive" alt=""/></li>
                <li><img src='userlayouts/web/images/icon6.jpg' class="img-responsive" alt=""/></li>
                <li class="last"><img src='userlayouts/web/images/icon7.jpg' class="img-responsive" alt=""/></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="instagram_top">
            <div class="instagram text-center">
                <h3><i class="insta_icon"> </i><span class="small">Các Gian Hàng</span></h3>
            </div>
            <ul class="instagram_grid">
                <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="userlayouts/web/images/i1.jpg" class="img-responsive"alt=""/></a></li>
                <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="userlayouts/web/images/i2.jpg" class="img-responsive" alt=""/></a></li>
                <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="userlayouts/web/images/i3.jpg" class="img-responsive" alt=""/></a></li>
                <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="userlayouts/web/images/i4.jpg" class="img-responsive" alt=""/></a></li>
                <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="userlayouts/web/images/i5.jpg" class="img-responsive" alt=""/></a></li>
                <li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="userlayouts/web/images/i6.jpg" class="img-responsive" alt=""/></a></li>
                <div class="clearfix"></div>
                <div id="small-dialog1" class="mfp-hide">
                    <div class="pop_up">
                        <h4>A Sample Photo Stream</h4>
                        <img src="userlayouts/web/images/i_zoom.jpg" class="img-responsive" alt=""/>
                    </div>
                </div>
            </ul>
        </div>
        <ul class="footer_social">
            <li><a href="https://www.facebook.com/khanh1996ct"> <i class="fb"> </i> </a></li>
            <li><a href="#"><i class="tw"> </i> </a></li>
            <li><a href="#"><i class="pin"> </i> </a></li>
            <div class="clearfix"></div>
        </ul>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer-grid">
            <h3></h3>
        </div>
        <div class="footer-grid">
            <h3>Menu</h3>
            <ul class="list1">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Eshop</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">New Collections</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-grid">
            <h3>Hổ Trợ</h3>
            <ul class="list1">
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Search Terms</a></li>
                <li><a href="#">Advanced Search</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Addresses</a></li>
            </ul>
        </div>
        <div class="footer-grid footer-grid_last">
            <h3>Về chúng tôi</h3>
            <p class="footer_desc">nguyễn quốc khánh</p>
            <p class="f_text">Phone:  &nbsp;&nbsp;(+84) 972-705-703</p>
            <p class="email">Email:<a href="#">nqkhanh.18041996@gmail.com</a></p>
        </div>
        <div class="footer-grid">
            <h3></h3>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="copy">
            <p>Copyright © 2018 Shape. All Rights Reserved .<a href="https://www.facebook.com/khanh1996ct" target="_blank">Design by N-Q-KHANH.</a> </p>
        </div>
    </div>
</div>
</body>
</html>