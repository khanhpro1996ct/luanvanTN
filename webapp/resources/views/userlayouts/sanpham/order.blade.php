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
        <div class="privacy about">
            <h3>Giỏ Hàng</h3>

            <div class="checkout-right">
                <h4>Giỏ hàng của bạn: <span>3 Products</span></h4>
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody><tr class="rem1">
                        <td class="invert">1</td>
                        <td class="invert-image"><a href="single.html"><img src="userlayouts/webuser/images/1.png" alt=" " class="img-responsive"></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Fortune Sunflower Oil</td>

                        <td class="invert">$290.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close1"> </div>
                            </div>

                        </td>
                    </tr>
                    <tr class="rem2">
                        <td class="invert">2</td>
                        <td class="invert-image"><a href="single.html"><img src="userlayouts/webuser/images/3.png" alt=" " class="img-responsive"></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Basmati Rise (5 Kg)</td>

                        <td class="invert">$250.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close2"> </div>
                            </div>

                        </td>
                    </tr>
                    <tr class="rem3">
                        <td class="invert">3</td>
                        <td class="invert-image"><a href="single.html"><img src="userlayouts/webuser/images/2.png" alt=" " class="img-responsive"></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Pepsi Soft Drink (2 Ltr)</td>

                        <td class="invert">$15.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close3"> </div>
                            </div>

                        </td>
                    </tr>

                    </tbody></table>
            </div>
            <div class="checkout-left">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                        <li>Product1 <i>-</i> <span>$15.00 </span></li>
                        <li>Product2 <i>-</i> <span>$25.00 </span></li>
                        <li>Product3 <i>-</i> <span>$29.00 </span></li>
                        <li>Total Service Charges <i>-</i> <span>$15.00</span></li>
                        <li>Total <i>-</i> <span>$84.00</span></li>
                    </ul>
                </div>
                <div class="col-md-8 address_form_agile">
                    <h4>Add a new Details</h4>
                    <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Full name: </label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Mobile number:</label>
                                                <input class="form-control" type="text" placeholder="Mobile number">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Landmark: </label>
                                                <input class="form-control" type="text" placeholder="Landmark">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Town/City: </label>
                                        <input class="form-control" type="text" placeholder="Town/City">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Address type: </label>
                                        <select class="form-control option-w3ls">
                                            <option>Office</option>
                                            <option>Home</option>
                                            <option>Commercial</option>

                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">Delivery to this Address</button>
                            </div>
                        </section>
                    </form>
                    <div class="checkout-right-basket">
                        <a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>

                <div class="clearfix"> </div>

            </div>

        </div>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->

@include('userlayouts.footer')
@yield('script')
<!-- js -->
<script src="userlayouts/webuser/js/jquery-1.11.1.min.js"></script>
<!--quantity-->
<script>
    $('.value-plus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
        if(newVal>=1) divUpd.text(newVal);
    });
</script>
<!--quantity-->
<script>$(document).ready(function(c) {
        $('.close1').on('click', function(c){
            $('.rem1').fadeOut('slow', function(c){
                $('.rem1').remove();
            });
        });
    });
</script>
<script>$(document).ready(function(c) {
        $('.close2').on('click', function(c){
            $('.rem2').fadeOut('slow', function(c){
                $('.rem2').remove();
            });
        });
    });
</script>
<script>$(document).ready(function(c) {
        $('.close3').on('click', function(c){
            $('.rem3').fadeOut('slow', function(c){
                $('.rem3').remove();
            });
        });
    });
</script>

<!-- //js -->
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="userlayouts/webuser/js/move-top.js"></script>
<script type="text/javascript" src="userlayouts/webuser/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="userlayouts/webuser/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<script src="userlayouts/webuser/js/minicart.js"></script>
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
</body>
</html>