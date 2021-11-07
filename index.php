<?php
    include("ket_noi.php");
?>
<!-- <html> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Shop</title>
    <link href="Content/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="Content/css/nn-style.css" rel="stylesheet">
    <link href="Content/css/custom.css" rel="stylesheet">
</head>

<body>
    <div class="container">   
        <header class="nn-header">
            <div class=" col-sm-3 col-md-3 nn-text-align-center">
                <img src="Content/img/logo.png" class="img-responsive" />
            </div><!--end logo-->
            <div class="col-md-6 col-sm-6 ">
                <!--chia nhỏ layout-->
                <?php
                include("layout/search.php");
                ?>
            </div><!--end search box-->
            <div class="nn-cart-box col-sm-3 col-md-3 ">
                <div class="nn-top-cart-wrapper ">
                    <div class="nn-top-cart-contain">
                        <?php
                        include("layout/CartInfo.php");
                        ?>
                    </div>
                </div>
            </div><!--end cart box-->
        </header>
        <div class="container">
            <?php
            include("layout/Menu.php");
            ?>            
            <div class="container row">
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
                    <?php
                    include("layout/Category.php");
                    include("layout/Saleoff.php");
                    include("layout/BestSeller.php");
                    include("layout/AddBanner.php");
                    ?> 
                </div><!--end left-sidebar-->
                <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
                    <div class="nn-home-banner">
                        <img src="Content/img/banner/home-banner03.jpg" class="img-responsive" />
                    </div><!--end home banner-->
                    <?php
                    include("chuc_nang/dieu_huong.php");
                    ?>    
                </div>
            </div>
            <?php
            include("layout/Footer.php");
            ?>
        </div>
    </div>  
</body>
</html>

