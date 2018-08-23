<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>
    <title>LVTN - Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ url('adminlayouts/horizontal/assets/images/favicon.ico') }}"/>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ url('adminlayouts/horizontal/assets/plugins/morris/morris.css') }}"/>

    <!-- DataTables -->
    <link href="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="{{ url('adminlayouts/horizontal/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="{{ url('adminlayouts/horizontal/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('adminlayouts/horizontal/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('adminlayouts/horizontal/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>


<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--Upcube-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="" class="logo">
                    <img src="{{ url('adminlayouts/horizontal/assets/images/logo-sm.png') }}" alt="" height="22" class="logo-small"/>
                    <img src="{{ url('adminlayouts/horizontal/assets/images/logo.png') }}" alt="" height="24" class="logo-large"/>
                </a>

            </div>
            <!-- End Logo container-->

            <div class="menu-extras topbar-custom">

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="Search"/>
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <ul class="list-inline float-right mb-0">
                    <!-- notification-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Notification (3)</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b>
                                    <small class="text-muted">Dummy text of the printing and typesetting industry.</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details"><b>New Message received</b>
                                    <small class="text-muted">You have 87 unread messages</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                View All
                            </a>

                        </div>
                    </li>
                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                           href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ url('adminlayouts/horizontal/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                        </div>
                    </li>
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{ url('/admin') }}"><i class="ti-home"></i>Bảng điều khiển</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-crown"></i>Quản Lý Sản Phẩm</a>
                        <ul class="submenu">
                            <li><a href="{{ route('sp.index') }}">Danh sách</a></li>
                            <li><a href="#">Cài đặt giá</a></li>
                            <li><a href="#">Quản lý danh mục</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-crown"></i>Quản Lý Hóa Đơn</a>
                        <ul class="submenu">
                            <li><a href="#">Hóa đơn chờ duyệt</a></li>
                            <li><a href="#">Hóa đơn đã duyệt</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-crown"></i>Quản Lý Hoa Hồng</a>
                        <ul class="submenu">
                            <li><a href="#">Danh sách hoa hồng</a></li>
                            <li><a href="#">Lịch sử nhận hoa hồng</a></li>
                            <li><a href="#">Phân cấp hoa hồng</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-crown"></i>Quản Lý Gian Hàng</a>
                        <ul class="submenu">
                            <li><a href="{{ route('gh.index') }}">Danh sách</a></li>
                            <li><a href="#">% hoa hồng</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                © 2018 LVTN - Crafted with <i class="mdi mdi-heart text-danger"></i> by N-Q-KHANH.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->
<script src="{{ url('adminlayouts/horizontal/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/popper.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/modernizr.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/waves.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/js/jquery.scrollTo.min.js') }}"></script>

<!--Morris Chart-->
{{--<script src="{{ url('adminlayouts/horizontal/assets/plugins/morris/morris.min.js') }}"></script>--}}
{{--<script src="{{ url('adminlayouts/horizontal/assets/plugins/raphael/raphael-min.js') }}"></script>--}}

{{--<script src="{{ url('adminlayouts/horizontal/assets/pages/dashborad.js') }}"></script>--}}

<!-- Required datatable js -->
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('adminlayouts/horizontal/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- App js -->
<script src="{{ url('adminlayouts/horizontal/assets/js/app.js') }}"></script>
@yield('script')
</body>
</html>