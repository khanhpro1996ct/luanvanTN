<!DOCTYPE html>
<html>
@include('userlayouts.thehead')
<style>
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

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

    .erorr {
        margin-top: -15px;
        font-size: 12px;
        color: red;
        margin-bottom: 10px;
    }
</style>
<body>
@include('userlayouts.header')
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ url('user') }}">Trang chủ</a><span>|</span>
            </li>
            <li><a href="#">Gian hàng</a><span>|</span></li>
            <li>Thêm mới sản phẩm</li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="w3l_banner_nav_left">
        <br>
        <nav class="navbar nav_bottom">
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a style="color: red"><b>Quản Lý Sản Phẩm</b></a></li>
                    <li><a href="{{ route('gh.qlsanpham') }}">Danh sách sản phẩm</a></li>
                    <li><a href="{{ route('gh.tmsanpham') }}">Thêm sản phẩm mới</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <div class="w3_login" style="padding-top: 1em">
            <h3 style="font-size: 26px;">Thêm Sản Phẩm Mới</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="">
                    </div>
                    <div class="form">
                        <h2>Thêm Sản Phẩm Mới Cho Gian Hàng Của Bạn</h2>
                        <form action="{{ route('gh.sanphamstore') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="labelnew"><span style="color: red;">(*)</span> Danh Mục :</label>
                            <div class="form-group">
                                <select class="form-control" name="dm_ten">
                                    @foreach ($danhmuc as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->dm_ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="labelnew"><span style="color: red;">(*)</span> Tên Sản Phẩm :</label>
                            <input required value="{{ old('sp_ten') }}" type="text" name="sp_ten" placeholder="Tên sản phẩm">
                            @if ($errors->has('sp_ten'))
                                <p class="erorr">{{ $errors->first('sp_ten') }}</p>
                            @endif

                            <label class="labelnew"><span style="color: red;">(*)</span> Số Lượng Trong Kho :</label>
                            <input required value="{{ old('sp_so_luong') }}" type="text" name="sp_so_luong" placeholder="Số lượng có trong của hàng">
                            @if ($errors->has('sp_so_luong'))
                                <p class="erorr">{{ $errors->first('sp_so_luong') }}</p>
                            @endif

                            <label class="labelnew" style="width: 100%;">Ảnh sản phẩm :</label>
                            <div style="display: flex;">
                                <img class="imgnew" id="avatar" src="{{url('upload')}}/image.png" alt="your image"/>
                            </div>
                            <br>
                            <input type='file' name="file" onchange="readURL(this)"/>
                            <br>
                            @if ($errors->has('file'))
                                <p class="erorr">{{ $errors->first('file') }}</p>
                            @endif

                            <label class="labelnew"><span style="color: red;">(*)</span> Giá Bán :</label>
                            <input required value="{{ old('gia_goc') }}" type="text" name="gia_goc" placeholder=" vd: {{ number_format(30000) }} vnđ">
                            @if ($errors->has('gia_goc'))
                                <p class="erorr">{{ $errors->first('gia_goc') }}</p>
                            @endif

                            <label class="labelnew">Giá Khuyến Mãi :</label>
                            <p style="font-size: 12px;color: red;" class="help-block">Lưu ý : Giá khuyến mãi nhỏ hơn giá bán hoặc không nhập giá khuyến mãi !</p>
                            <input value="{{ old('gia_km') }}" type="text" name="gia_km" placeholder="vd: {{  number_format(25000) }} vnđ">
                            @if ($errors->has('gia_goc'))
                                <p class="erorr">{{ $errors->first('gia_goc') }}</p>
                            @endif

                            <br>
                            <input id="btnsm" type="submit" value="Lưu">
                        </form>
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
            console.log(document.getElementById('fileAvatar').value);
        }
    }
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
@include('userlayouts.messages')
</body>
</html>