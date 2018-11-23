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
                            <h4>đ{{ number_format($sanphamsigle['gia_goc_sp']) }}</h4>
                        @else
                            <h4>đ{{ number_format($sanphamsigle['gia_km_sp']) }}
                                <span>đ{{ number_format($sanphamsigle['gia_goc_sp']) }}</span>
                            </h4>
                        @endif
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <input type="button" name="submit" value="Thêm Giỏ Hàng"
                               onclick="getCart('{{$sanphamsigle['id_sp']}}','{{$sanphamsigle['ten_sp']}}','{{$sanphamsigle['gia_km_sp']}}','{{$sanphamsigle['gia_goc_sp']}}','{{$sanphamsigle['gh_id']}}')"
                               class="button"/>
                    </div>
                    <hr style="margin: 0px">
                    <p style="margin: 0px; font-size: 12px">
                        <img src="{{ url('upload') }}/shop.png"> {{ $sanphamsigle['gh_sp'] }}
                    </p>
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
                <div class="col-md-3 w3ls_w3l_banner_left khungSP">
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
                                                   onclick="getCart('{{$value->id_sp}}','{{$value->ten_sp}}','{{$value->gia_km_sp}}','{{$value->gia_goc_sp}}','{{$value->gh_id}}')"
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
@include('userlayouts.footer')
@yield('script')
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
<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
@include('userlayouts.modal');
<script>
    function getCart(id, name, gia_km, gia_goc, id_shop) {
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
