<!DOCTYPE html>
<html>
@include('userlayouts.thehead')
<style>
    .singlerow {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .gia {
        font-size: 13px !important;
    }

    .khungSP {
        height: 360px;
        margin-bottom: 10px !important;
    }
</style>
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
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            {{--<h3>Make your <span>food</span> with Spicy.</h3>--}}
                            <div class="more">
                                <a href="" class="button--saqui button--round-l button--text-thick"
                                   data-text="Mua ngay">Mua ngay</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            {{--<h3>Make your <span>food</span> with Spicy.</h3>--}}
                            <div class="more">
                                <a href="" class="button--saqui button--round-l button--text-thick"
                                   data-text="Mua ngay">Mua ngay</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            {{--<h3>upto <i>50%</i> off.</h3>--}}
                            <div class="more">
                                <a href="" class="button--saqui button--round-l button--text-thick"
                                   data-text="Mua ngay">Mua ngay</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <link rel="stylesheet" href="{{ url('userlayouts/webuser/css/flexslider.css') }}" type="text/css" media="screen"
              property=""/>
        <script defer src="{{ url('userlayouts/webuser/js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
    </div>
    <div class="clearfix"></div>
</div>
<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{ url('userlayouts/webuser/images/4.jpg') }}" alt=" " class="img-responsive"/>
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4>Ưu đãi giảm giá <span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{ url('userlayouts/webuser/images/5.jpg') }}" alt=" " class="img-responsive"/>
                <div class="wthree_banner_btm_pos">
                    <h3>Là cửa hàng <span>Tạp hóa</span><i>dành cho bạn</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{ url('userlayouts/webuser/images/6.jpg') }}" alt=" " class="img-responsive"/>
                <div class="wthree_banner_btm_pos1">
                    {{--<h3>Save <span>Upto</span> $10</h3>--}}
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="top-brands">
    <div class="container">
        <h3>Sản Phẩm</h3>
        <div class="agile_top_brands_grids">
            @foreach($sanpham as $value)
                <div class="col-md-3 top_brand_left khungSP">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag">
                                <img src="{{ url('userlayouts/webuser/images/tag.png') }}" alt=""
                                     class="img-responsive"/>
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('singelproduct',$value->id_sp) }}">
                                                <img style="width: 120px;height: 140px"
                                                     src="{{url('upload')}}/{{ $value->image_sp }}"/>
                                            </a>
                                            <p class="singlerow">{{ $value->ten_sp }}</p>
                                            @if($value->gia_km_sp == 0)
                                                <h4 class="gia">đ{{ number_format($value->gia_goc_sp) }}</h4>
                                            @else
                                                <h4 class="gia">đ{{ number_format($value->gia_km_sp) }}
                                                    <span>đ{{ number_format($value->gia_goc_sp) }}</span>
                                                </h4>
                                            @endif
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <input type="button" name="submit" value="Thêm Giỏ Hàng"
                                                   onclick="getCart('{{$value->id_sp}}','{{$value->ten_sp}}','{{$value->gia_km_sp}}','{{$value->gia_goc_sp}}')"
                                                   class="button"/>
                                        </div>
                                        <hr style="margin: 0px">
                                        <p style="margin: 0px; font-size: 12px">
                                            <img src="{{ url('upload') }}/shop.png"> {{ $value->gh_sp }}
                                        </p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>
            {{ $sanpham->links() }}
        </div>
    </div>
</div>
<div class="fresh-vegetables">
    <div class="container">
        <h3>Sản Phẩm Hàng Đầu</h3>
        <div class="w3l_fresh_vegetables_grids">
            <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                <div class="w3l_fresh_vegetables_grid2">
                    <ul>
                        @foreach($data as $val)
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <a href="{{ route('sanphamdanhmuc',$val->id) }}">{{ $val->dm_ten }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="{{ url('userlayouts/webuser/images/8.jpg') }}" alt=" " class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <div class="w3l_fresh_vegetables_grid1_rel">
                            <img src="{{ url('userlayouts/webuser/images/7.jpg') }}" alt=" " class="img-responsive"/>
                            <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                <div class="more m1">
                                    <a href="" class="button--saqui button--round-l button--text-thick"
                                       data-text="Shop now">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="{{ url('userlayouts/webuser/images/10.jpg') }}" alt=" " class="img-responsive"/>
                        <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                            <h5>Ưu đãi đặc biệt</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="{{ url('userlayouts/webuser/images/9.jpg') }}" alt=" " class="img-responsive"/>
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="{{ url('userlayouts/webuser/images/11.jpg') }}" alt=" " class="img-responsive"/>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="agileinfo_move_text">
                    <div class="agileinfo_marquee">
                        <h4>Giảm giá <span class="blink_me">25%</span>cho đơn hàng đầu tiên và nhận phiếu thưởng quà
                            tặng</h4>
                    </div>
                    <div class="agileinfo_breaking_news">
                        <span> </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
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
@yield('script')
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
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
@include('userlayouts.modal');
<script>
    function getCart(id, name, gia_km, gia_goc) {
        var item = $('#item');
        var sp = sessionStorage.getItem('list_order');
        sp = JSON.parse(sp);
        if (sp != undefined && sp != []) {
            html = '';
            sp.forEach(function (element) {
                html = html +
                    '<div id="item' + element.id + '"> ' +
                    '<div class="row">' +
                    '<div class="col-sm-12" style="font-size: 14px">' +
                    '<div class="col-sm-7">' +
                    '<p style="font-weight: bold" >' + element.name + '</p>\n' +
                    '<p style="font-weight: 300;color: #999"> Đơn giá: đ:' + Number(element.gia).toLocaleString('en') + '</p>\n' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<input style="padding: 0px;width: 60px;border-radius: 36px;padding-left: 22px;"name=soluong[] id="sl_' + element.id + '" class="form-control" type="number" placeholder="nhập số lượng" value="' + element.soluong + '">\n' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                    '<p id="tt_' + element.id + '">đ:' + Number(element.thanhtien).toLocaleString('en') + '</p>' +
                    '</div>' +
                    '<div class="col-sm-1">' +
                    '<button  id="del_' + element.id + '" onclick="deleteItem(' + element.id + ')" type="button" style="color: white;background-color: red" class="minicart-remove">x</button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<input type="hidden" name=id[] value="' + element.id + '"> ' +
                    '<input type="hidden" name=name[] value="' + element.name + '"> ' +
                    '<input type="hidden" name=gia[] value="' + element.gia + '"> ' +
                    '<hr>' +
                    '</div> ';
                item.html(html);
            });
            sp.forEach(function (element) {
                $('#sl_' + element.id).on('input', function () {
                    var tongtien = $('#sl_' + element.id).val() * element.gia;
                    // var newtongtien= tongtien.toLocaleString('en');
                    $('#tt_' + element.id).html('đ:' + Number(tongtien));
                    sp.find(function (element2) {
                        if (element2.id == id) {
                            element2.soluong = Number($('#sl_' + element.id).val());
                            element2.thanhtien = Number($('#sl_' + element.id).val() * element.gia);
                        }
                    });
                    sessionStorage.setItem('list_order', JSON.stringify(sp));
                });
            });
        }
        else {
            sp = [];
        }
        var gia = gia_km == 0 ? gia_goc : gia_km;
        if ($('#sl_' + id).val() != undefined) {
            var temp = $('#sl_' + id).val();
            temp++;
            $('#sl_' + id).val(temp);
            var tongtien = $('#sl_' + id).val() * gia;
            // var newtongtien = tongtien.toLocaleString('en');
            $('#tt_' + id).html('đ:' + Number(tongtien));
            sp.find(function (element) {
                if (element.id == id) {
                    Number(element.soluong++);
                    element.thanhtien = Number(element.soluong * element.gia);
                }
            });
            sessionStorage.setItem('list_order', JSON.stringify(sp));
        }
        else {
            html = "";
            html =
                '<div id="item' + id + '"> ' +
                '<div class="row">' +
                '<div class="col-sm-12" style="font-size: 14px">' +
                '<div class="col-sm-7">' +
                '<p style="font-weight: bold" > ' + name + '</p>\n' +
                '<p style="font-weight: 300;color: #999"> Đơn giá:đ:' + Number(gia).toLocaleString('en') + '</p>\n' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<input style="padding: 0px;width: 60px;border-radius: 36px;padding-left: 22px;"name=soluong[] id="sl_' + id + '" class="form-control" type="number" placeholder="nhập số lượng" value="1">\n' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<p id="tt_' + id + '">đ:' + Number(gia).toLocaleString('en') + '</p>' +
                '</div>' +
                '<div class="col-sm-1">' +
                '<button id="del_' + id + '" onclick="deleteItem(' + id + ')" type="button" style="color: white;background-color: red" class="minicart-remove">x</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<input type="hidden" name=id[] value="' + id + '"> ' +
                '<input type="hidden" name=name[] value="' + name + '"> ' +
                '<input type="hidden" name=gia[] value="' + gia + '"> ' +
                '<hr>' +
                '</div> ';
            item.append(html);

            $('#sl_' + id).on('input', function () {
                var tongtien = $('#sl_' + id).val() * gia;
                // var newtongtien = tongtien.toLocaleString('en');
                $('#tt_' + id).html('đ:' + Number(tongtien));
                sp.find(function (element) {
                    if (element.id == id) {
                        element.soluong = Number($('#sl_' + id).val());
                        element.thanhtien = Number($('#sl_' + id).val() * gia);
                    }
                });
                sessionStorage.setItem('list_order', JSON.stringify(sp));
            });
            sp.push({
                id: id,
                name: name,
                soluong: 1,
                gia: gia,
                thanhtien: gia
            });
            sessionStorage.setItem('list_order', JSON.stringify(sp));

        }
        $('#orderModal').modal('show');

    }

    function deleteItem(id) {
        var sp = sessionStorage.getItem('list_order');
        sp = JSON.parse(sp);
        if (sp != [] && sp != undefined) {
            //Xoa mang
            var index = sp.map(x => {
                return x.id;
            }).indexOf(id);
            sp.splice(index, 1);
            sessionStorage.setItem('list_order', JSON.stringify(sp));
            //Xoa giao dien
            $('#item' + id).remove();
        }
    }
</script>
</body>
</html>

