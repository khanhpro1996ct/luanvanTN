<!DOCTYPE html>
<html>
@include('userlayouts.thehead')
<body>
@include('userlayouts.header')
<div class="products-breadcrumb">
    <div class="container" style="margin-left: 5px;">
        <ul>
            <li>
                @if(!empty(Auth::user()))
                    <span>|</span>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a>{{ Auth::user()->phone }}</a>
                    <span>|</span>
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <a href="{{ route('logout') }}">Đăng Xuất</a>
                    <span>|</span>
                @else
                    <span>|</span>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="{{ url('user/login') }}">Đăng Nhập</a>
                    <span>|</span>
                @endif
            </li>
        </ul>
    </div>
</div>
<div class="banner">
    @include('userlayouts.category')
    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner3">
            <h3>Những Sản Phẩm Tốt Nhất<span class="blink_me"></span></h3>
        </div>
        <div class="agileinfo_single">
            <h5>{{ $sanphamsigle['ten_sp'] }}</h5>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="{{url('upload')}}/{{ $sanphamsigle['image_sp'] }}" alt=" "
                     class="img-responsive"/>
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                </div>
                <div class="w3agile_description">
                    <h4>Chi Tiết :</h4>
                    <p>{{ $sanphamsigle['description_sp'] }}</p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        @if($sanphamsigle['gia_km_sp'] == 0)
                            <h4>{{ number_format($sanphamsigle['gia_goc_sp']) }} vnđ</h4>
                        @else
                            <h4>{{ number_format($sanphamsigle['gia_km_sp']) }} vnđ
                                <span>{{ number_format($sanphamsigle['gia_goc_sp']) }}vnđ</span>
                            </h4>
                        @endif
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart"/>
                                <input type="hidden" name="add" value="1"/>
                                <input type="hidden" name="business" value=" "/>
                                <input type="hidden" name="item_name" value="pulao basmati rice"/>
                                <input type="hidden" name="amount" value="21.00"/>
                                <input type="hidden" name="discount_amount" value="1.00"/>
                                <input type="hidden" name="currency_code" value="USD"/>
                                <input type="hidden" name="return" value=" "/>
                                <input type="hidden" name="cancel_return" value=" "/>
                                <input type="submit" name="submit" value="Thêm Giỏ Hàng" class="button"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
    <div class="container">
        <h3>Sản Phẩm Cùng Loại</h3>
        <div class="w3ls_w3l_banner_nav_right_grid1">
            @foreach($sanpham as $value)
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="{{ url('userlayouts/webuser/images/offer.png') }}" alt=" "
                                     class="img-responsive"/>
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="#">
                                                <img style="width: 120px;height: 140px"
                                                     src="{{url('upload')}}/{{ $value['image_sp'] }}"/>
                                            </a>
                                            <p>{{ $value['ten_sp'] }}</p>
                                            @if($value['gia_km_sp'] == 0)
                                                <h4>{{ number_format($value['gia_goc_sp']) }} vnđ</h4>
                                            @else
                                                <h4>{{ number_format($value['gia_km_sp']) }} vnđ
                                                    <span>{{ number_format($value['gia_goc_sp']) }}vnđ</span>
                                                </h4>
                                            @endif
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="{{ route('order') }}" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart"/>
                                                    <input type="hidden" name="add" value="1"/>
                                                    <input type="hidden" name="business" value=" "/>
                                                    <input type="hidden" name="item_name"
                                                           value="Fortune Sunflower Oil"/>
                                                    <input type="hidden" name="amount" value="7.99"/>
                                                    <input type="hidden" name="discount_amount" value="1.00"/>
                                                    <input type="hidden" name="currency_code" value="USD"/>
                                                    <input type="hidden" name="return" value=" "/>
                                                    <input type="hidden" name="cancel_return" value=" "/>
                                                    <input type="submit" name="submit" value="Thêm Giỏ Hàng"
                                                           class="button"/>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@include('userlayouts.footer')
@yield('script')
<!-- Bootstrap Core JavaScript -->
<script src="{{ url('userlayouts/webuser/js/bootstrap.min.js') }}"></script>
<script src='{{ url('userlayouts/webuser/js/okzoom.js') }}'></script>
<script>
    $(function () {
        $('#example').okzoom({
            width: 150,
            height: 150,
            border: "1px solid black",
            shadow: "0 0 5px #000"
        });
    });
</script>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
</body>
</html>
