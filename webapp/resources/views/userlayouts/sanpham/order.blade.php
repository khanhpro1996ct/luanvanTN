<!DOCTYPE html>
<html>
@include('userlayouts.thehead')
<body>
@include('userlayouts.header')
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Trang chủ</a><span>|</span></li>
            <li>Giỏ hàng</li>
        </ul>
    </div>
</div>
<div class="banner">
    @include('userlayouts.category')
    <div class="w3l_banner_nav_right">
        <!-- about -->
        {{--{{ dd($order) }}--}}
        <form action="{{ route('orderStore') }}" method="post">
            @csrf
            <div class="privacy about">
                <h3>Giỏ Hàng</h3>
                <div class="checkout-right">
                    <h4>Giỏ hàng của bạn: <span>{{ count($order) }} Sản phẩm</span></h4>
                    @if($order != null)
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
                            <tbody>
                            @foreach($order as $key => $value)
                                <tr class="rem1" id="tr{{$value['id']}}">
                                    <td class="invert-image">
                                        <?php
                                        $image = \App\SanPhamModel::where('id', $value['id'])->get()->first()->sp_image;
                                        ?>
                                        <a href="{{ route('singelproduct',$value['id']) }}">
                                            <img src="{{url('upload')}}/{{ $image }}" style="width: 43px;height: 44px"
                                                 alt=" "
                                                 class="img-responsive">
                                        </a>
                                    </td>
                                    <td>
                                        <input style="padding: 0px;width: 60px;border-radius: 36px;padding-left: 22px;"
                                               type="number" name="soluong[{{$value['id']}}]"
                                               value="{{ $value['soluong'] }}">
                                    </td>
                                    <td class="invert">{{ $value['name'] }}</td>

                                    <td class="invert">đ{{ number_format($value['gia'] * $value['soluong']) }}</td>
                                    <td class="invert">
                                        <div class="rem" onclick="deleteItem2('tr{{$value["id"]}}')">
                                            <div class="close1"></div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Giỏ hàng của bạn hiện chưa có sản phẩm nào</p>
                    @endif
                </div>
                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket"></div>
                    <div class="col-md-8 address_form_agile">
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Họ & tên: </label>
                                        <input required class="billing-address-name form-control" type="text"
                                               name="ho_ten" placeholder="Họ và tên ">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Số điện thoại:</label>
                                                <input required class="form-control" type="number" name="sdt_kh"
                                                       placeholder="Số điện thoại">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Địa chỉ giao: </label>
                                                <textarea required class="form-control" type="text" name="dia_chi_giao"
                                                          placeholder="Địa chỉ giao hàng"></textarea>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <button class="submit check_out">Đặt Hàng</button>
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
<!-- //banner -->

@include('userlayouts.footer')
@yield('script')

<!-- js -->
<script src="{{ url('userlayouts/webuser/js/jquery-1.11.1.min.js') }}"></script>
<!--quantity-->
<script>
    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
</script>
<!--quantity-->
{{--<script>--}}
    {{--$(document).ready(function (c) {--}}
        {{--$('.close1').on('click', function (c) {--}}
            {{--$('.rem1').fadeOut('slow', function (c) {--}}
                {{--$('.rem1').remove();--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
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
<script type="text/javascript" src="{{ url('userlayouts/webuser/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ url('userlayouts/webuser/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
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
@include('userlayouts.modal');
<script>
    function getCart() {
        $('#item').html('');
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
                    '<input style="padding: 0px;width: 60px;border-radius: 36px;padding-left: 22px;" name=soluong[] id="sl_' + element.id + '" class="form-control" type="number" placeholder="nhập số lượng" value="' + element.soluong + '">\n' +
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
        // var gia = gia_km == 0 ? gia_goc : gia_km;
        // if ($('#sl_' + id).val() != undefined) {
        //     var temp = $('#sl_' + id).val();
        //     temp++;
        //     $('#sl_' + id).val(temp);
        //     var tongtien = $('#sl_' + id).val() * gia;
        //     // var newtongtien = tongtien.toLocaleString('en');
        //     $('#tt_' + id).html('đ:' + Number(tongtien));
        //     sp.find(function (element) {
        //         if (element.id == id) {
        //             Number(element.soluong++);
        //             element.thanhtien = Number(element.soluong * element.gia);
        //         }
        //     });
        //     sessionStorage.setItem('list_order', JSON.stringify(sp));
        // }
        // else {
        //     html = "";
        //     html =
        //         '<div id="item' + id + '"> ' +
        //         '<div class="row">' +
        //         '<div class="col-sm-12" style="font-size: 14px">' +
        //         '<div class="col-sm-7">' +
        //         '<p style="font-weight: bold" > ' + name + '</p>\n' +
        //         '<p style="font-weight: 300;color: #999"> Đơn giá:đ:' + Number(gia).toLocaleString('en') + '</p>\n' +
        //         '</div>' +
        //         '<div class="col-sm-2">' +
        //         '<input style="padding: 0px;width: 60px;border-radius: 36px;padding-left: 22px;"name=soluong[] id="sl_' + id + '" class="form-control" type="number" placeholder="nhập số lượng" value="1">\n' +
        //         '</div>' +
        //         '<div class="col-sm-2">' +
        //         '<p id="tt_' + id + '">đ:' + Number(gia).toLocaleString('en') + '</p>' +
        //         '</div>' +
        //         '<div class="col-sm-1">' +
        //         '<button id="del_' + id + '" onclick="deleteItem(' + id + ')" type="button" style="color: white;background-color: red" class="minicart-remove">x</button>' +
        //         '</div>' +
        //         '</div>' +
        //         '</div>' +
        //         '<input type="hidden" name=id[] value="' + id + '"> ' +
        //         '<input type="hidden" name=name[] value="' + name + '"> ' +
        //         '<input type="hidden" name=gia[] value="' + gia + '"> ' +
        //         '<hr>' +
        //         '</div> ';
        //     item.append(html);
        //
        //     $('#sl_' + id).on('input', function () {
        //         var tongtien = $('#sl_' + id).val() * gia;
        //         // var newtongtien = tongtien.toLocaleString('en');
        //         $('#tt_' + id).html('đ:' + Number(tongtien));
        //         sp.find(function (element) {
        //             if (element.id == id) {
        //                 element.soluong = Number($('#sl_' + id).val());
        //                 element.thanhtien = Number($('#sl_' + id).val() * gia);
        //             }
        //         });
        //         sessionStorage.setItem('list_order', JSON.stringify(sp));
        //     });
        //     sp.push({
        //         id: id,
        //         name: name,
        //         soluong: 1,
        //         gia: gia,
        //         thanhtien: gia
        //     });
        //     sessionStorage.setItem('list_order', JSON.stringify(sp));
        //
        // }
        // $('#orderModal').modal('show');

    }

    function deleteItem2(id) {

        var sp = sessionStorage.getItem('list_order');
        console.log(sp);
        sp = JSON.parse(sp);
        if (sp != [] && sp != undefined) {
            //Xoa mang
            var index = sp.map(x => {
                return x.id;
            }).indexOf(id);
            sp.splice(index, 1);
            sessionStorage.setItem('list_order', JSON.stringify(sp));
            //Xoa giao dien
            $('#tr'+id).remove();
            getCart();
            $('#orderForm').submit();
        }
    }
</script>
</body>
</html>