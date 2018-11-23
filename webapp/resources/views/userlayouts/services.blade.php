<!DOCTYPE html>
<html>
@include('userlayouts.thehead')
<body>
@include('userlayouts.header')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Home</a><span>|</span></li>
            <li>Services</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('userlayouts.category')
    <div class="w3l_banner_nav_right">
        <!-- services -->
        <div class="services">
            <h3>Dịch vụ</h3>
            <div class="w3ls_service_grids">
                <div class="col-md-5 w3ls_service_grid_left">
                    <h4>cum soluta nobis est</h4>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                        repellat.</p>
                </div>
                <div class="col-md-7 w3ls_service_grid_right">
                    <div class="col-md-4 w3ls_service_grid_right_1">
                        <img src="userlayouts/webuser/images/18.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="col-md-4 w3ls_service_grid_right_1">
                        <img src="userlayouts/webuser/images/19.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="col-md-4 w3ls_service_grid_right_1">
                        <img src="userlayouts/webuser/images/20.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="w3ls_service_grids1">
                <div class="col-md-6 w3ls_service_grids1_left">
                    <img src="userlayouts/webuser/images/4.jpg" alt=" " class="img-responsive"/>
                </div>
                <div class="col-md-6 w3ls_service_grids1_right">
                    <ul>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>et voluptates repudiandae sint et
                            molestiae
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>rerum necessitatibus saepe eveniet
                            ut
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>placeat facere possimus, omnis
                            voluptas
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Et harum quidem rerum facilis est
                            et expedita
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>similique sunt in culpa qui officia
                            deserunt
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>odio dignissimos ducimus qui
                            blanditiis
                        </li>
                    </ul>
                    <a href="single.html">Shop Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //services -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- services-bottom -->
<div class="services-bottom">
    <div class="container">
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            <p class="counter">89,147</p>
            <h3>Followers</h3>
        </div>
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>
            <p class="counter">54,598</p>
            <h3>Savings</h3>
        </div>
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-export" aria-hidden="true"></i>
            <p class="counter">83,983</p>
            <h3>Support</h3>
        </div>
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>
            <p class="counter">45,894</p>
            <h3>Popularity</h3>
        </div>
        <div class="clearfix"></div>
        <!-- Stats-Number-Scroller-Animation-JavaScript -->
        <script src="userlayouts/webuser/js/waypoints.min.js"></script>
        <script src="userlayouts/webuser/js/counterup.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
        <!-- //Stats-Number-Scroller-Animation-JavaScript -->

    </div>
</div>
<!-- //services-bottom -->
<!-- newsletter-top-serv-btm -->
<div class="newsletter-top-serv-btm">
    <div class="container">
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <h3>Nam libero tempore</h3>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                saepe eveniet ut et voluptates repudiandae sint et.</p>
        </div>
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </div>
            <h3>officiis debitis aut rerum</h3>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                saepe eveniet ut et voluptates repudiandae sint et.</p>
        </div>
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <h3>eveniet ut et voluptates</h3>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                saepe eveniet ut et voluptates repudiandae sint et.</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter-top-serv-btm -->
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_left">
            <h3>sign up for our newsletter</h3>
        </div>
        <div class="w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="subscribe now">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
@include('userlayouts.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="userlayouts/webuser/js/bootstrap.min.js"></script>
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