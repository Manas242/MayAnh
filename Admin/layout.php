
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Digital Store</title>

    <!-- Bootstrap -->
    <link href="Content/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Content/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Content/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Content/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="Content/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Content/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="Content/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Content/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="http://localhost:81/CNPM/MayAnh/Admin/layout.php" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
<!--                             <img src="Content/images/@Session["avatar"]" alt="..." class="img-circle profile_img"> -->
                        </div>
                        <div class="profile_info">
<!--                             <span>Welcome,</span> -->
<!--                             <h2>@Session["username"]</h2> -->
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Danh m???c qu???n l??</h3>
                            <ul class="nav side-menu">
                                <?php
                                $link="?thamso=customers";
                                echo "<li><a href='$link'><i class='fa fa-usb'></i>Customers</a></li>";
                                $link="?thamso=orders";
                                echo "<li><a href='$link'><i class='fa fa-usb'></i>Orders</a></li>";
                                $link="?thamso=orderdetails";
                                echo "<li><a href='$link'><i class='fa fa-usb'></i>OrderDetails</a></li>";
                                $link="?thamso=products";
                                echo "<li><a href='$link'><i class='fa fa-usb'></i>Products</a></li>";
                                $link="?thamso=suppliers";
                                echo "<li><a href='$link'><i class='fa fa-usb'></i>Suppliers</a></li>";
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<!--                                     <img src="Content/images/@Session["avatar"]" alt="">@Session["username"] -->
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href=""><i class="glyphicon glyphicon-user"></i>Profile</a></li>
                                    <li><a href="/Administrator/MyNew/Index/"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                                    <li><a href="/Administrator/Login/Index/"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->

            <div class="right_col" role="main">
                <?php
                include("dieu_huong.php");
                ?> 
            </div>

            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="Content/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Content/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Content/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Content/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="Content/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="Content/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="Content/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="Content/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="Content/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="Content/vendors/Flot/jquery.flot.js"></script>
    <script src="Content/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="Content/vendors/Flot/jquery.flot.time.js"></script>
    <script src="Content/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="Content/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="Content/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="Content/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="Content/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="Content/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="Content/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="Content/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="Content/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="Content/vendors/moment/min/moment.min.js"></script>
    <script src="Content/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="Content/build/js/custom.min.js"></script>

</body>
</html>
