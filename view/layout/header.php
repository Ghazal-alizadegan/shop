<?php
ob_start();
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>NEXX SHOP </title>

    <!-- app.css if the Grid file (Contains grid style only) -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/app.css"/>
    <!-- Droid Sans From Google -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>
    <!-- Main stylesheet -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/base.css"/>
    <!-- Icon Font (icomoon.io) -->
    <link rel="stylesheet" type="text/css" href="public/default/fonts/style.css"/>
    <!-- CSS3 Animation Lib -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/animations.css"/>
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/slider.css" media="all"/>
    <!-- Jquery Selectric -->
    <link rel="stylesheet" type="text/css" href="public/default/stylesheets/selectric.css"/>
    <!-- Owl Carousel Assets -->
    <link href="public/default/owl-carousel/owl.carousel.css" rel="stylesheet"/>
    <link href="public/default/owl-carousel/owl.theme.css" rel="stylesheet"/>

    <script src="public/default/javascripts/vendor/custom.modernizr.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<!-- Header -->
<div class="header">
    <!-- Header top -->
    <div class="headertop">

        <!-- Content Row -->
        <div class="row">

            <!-- Welcome Txt -->
            <div class="small-12 medium-5 large-5 welcome-guest-text columns">
                کاربر مهمان خوش آمدید
            </div>
            <!-- End Welcome Txt -->
            <!-- Currency -->
            <div class="small-8 text-center small-centered large-uncentered medium-uncentered large-2 large-offset-1 medium-2 columns">
                <div class="currency"><a href="#">$</a></div>
                <div class="currency"><a href="#" title="Sterling Pound">£</a></div>
                <div class="currency"><a href="#" title="Euro">€</a></div>
            </div>

            <!-- Topcart -->
            <div class="small-12 medium-5 large-4 left topcartbg columns">
                <!-- Carticon -->
                <div class="topcart-icon text-center">
                    <i class="icon-cart2"></i>
                </div>
                <!-- End Carticon -->

                <!-- Topcart Text -->
                <div class="topcart-text">

                    سبد خرید (3 مورد)
                </div>
                <!-- End Topcart Text -->

                <!-- Topcart Arrow Down -->
                <div class="topcart-arrow-down">
                    <a href="#">
                        <i class="icon-arrow-down"></i>

                    </a>


                </div>
                <!-- End Topcart Arrow Down -->

                <!-- Cart items -->
                <div class="small-12 medium-12 large-4 cart-dropdown">

                    <!-- Item List -->
                    <div class="cart-item-list">

                        <!-- Thumb -->
                        <div class="cart-item-thumb right">
                            <img src="public/default/img/cart/1.jpg" alt="Cart product 1"/>
                        </div>
                        <!-- End thumb -->

                        <!-- Content -->
                        <div class="cart-item-content">
                            <!-- {product name} -->
                            <div class="cart-item-title">
                                <a href="#">

                                    لورم ایپسوم یا طرح‌نما</a>
                            </div>
                            <!-- PRice -->
                            <div class="cart-item-price">
                                $109.00
                            </div>
                            <!-- Remove -->
                            <a href="#" class="cart-remove">X</a>
                            <!-- Quanitity -->
                            <div class="cart-item-quantity">

                                تعداد: (1)
                            </div>


                        </div>
                        <!-- End Content -->

                        <!-- Clearing -->
                        <div class="clearing"></div>

                    </div>
                    <!-- End item list -->
                    <!-- Item List -->
                    <div class="cart-item-list">

                        <!-- Thumb -->
                        <div class="cart-item-thumb right">
                            <img src="public/default/img/cart/1.jpg" alt="Cart product 1"/>
                        </div>
                        <!-- End thumb -->

                        <!-- Content -->
                        <div class="cart-item-content">
                            <!-- {product name} -->
                            <div class="cart-item-title">
                                <a href="#">

                                    لورم ایپسوم یا طرح‌نما</a>
                            </div>
                            <!-- PRice -->
                            <div class="cart-item-price">
                                $109.00
                            </div>
                            <!-- Remove -->
                            <a href="#" class="cart-remove">X</a>
                            <!-- Quanitity -->
                            <div class="cart-item-quantity">

                                تعداد: (1)
                            </div>


                        </div>
                        <!-- End Content -->

                        <!-- Clearing -->
                        <div class="clearing"></div>

                    </div>
                    <!-- End item list -->

                    <!-- Total -->
                    <div class="small-12 large-12 text-center medium-12 columns cart-total">

                        مجموع: 124.00 $

                    </div>
                    <button class="small-12 large-12 btn btn-3 btn-3a icon-arrow-left">
                        سبد خرید
                    </button>
                    <button class="small-12 large-12 btn btn-3 btn-3a icon-lock">بررسی</button>

                </div>
                <!-- End Cart item -->
            </div>
            <!-- End Topcart -->

        </div>
        <!-- End Content Row -->

    </div>
    <!-- End Header top -->

    <!-- Header Bottom -->
    <div class="headerbottom">
        <!-- Content Row -->
        <div class="row headerbottomrow">

            <!-- Logo -->
            <div class="small-12 medium-3 large-2 small-centered large-uncentered text-center logo columns">
                <a href="index.html" title="nexx Homepage"><img src="public/default/img/logo.png" alt="Nexx Store"/></a>
            </div>
            <!-- End Logo -->
            <!-- Menu Icon For Mobile -->
            <div class="menu-icon"><i class="icon-menu"></i>

            </div>

            <!-- Main Navigation -->
            <div class="small-12 medium-12 large-7 mainnav columns">

                <ul class="navigation">
                    <li><a href="index.php">صفحه اصلی</a></li>
                    <?php
                    include_once 'controller/Clayout.php';
                    foreach ($category as $val) {
                        ?>
                        <li>

                            <a href="index.php?c=detail&a=list&id=<?php echo $val['id'] ?>"><?php echo $val['title'] ?></a>
                            <!-- dropdown -->
                            <div class="dropdown-menu">
                                <!-- Dropdown Links -->
                                <ul class="dropdown">
                                    <?php
                                    $subset = $class->category_sb_list($val['id']);
                                    foreach ($subset as $sb) {
                                        ?>
                                        <li><a href="index.php?c=detail&a=list&id=<?php echo $sb['id'] ?>"
                                               title="Product Grid"><?php echo $sb['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                                <!-- End Dropdown Links -->
                            </div>
                            <!-- End dropdown -->
                        </li>
                    <?php } ?>
                    <li><a href="index.php?c=contact&a=contact">تماس با ما</a></li>
                </ul>

            </div>
            <!-- End Main Navigation -->


            <!-- Searchbox -->
            <form method="post" action="index.php?c=detail&a=search">

                <div class="small-12 medium-12 large-3 searchinputholder columns">

                    <input type="text" class="searchinput" placeholder="
محصولات جستجو" name="search"/>
                </div>
            </form>

            <!-- End Searchbox -->

            <!-- Sub Navigation -->
            <div class="subnavigation">
                <ul class="subnav">
                    <li><a href="#">
                            ثبت نام</a></li>
                    <li><a href="#">ورود به صفحه</a></li>
                    <li><a href="#">علاقه مندی ها (10)</a></li>
                    <li><a href="#">
                            حساب من</a></li>
                    <li><a href="#">بررسی</a></li>
                </ul>
            </div>
            <!-- End Sub Navigation -->

        </div>
        <!-- End Content Row -->

    </div>
    <!-- End Header Bottom -->
</div>
<!-- End header -->
