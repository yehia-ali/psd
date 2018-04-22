<?php
include("libs/session.php");
include("libs/dbconn.php");
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Clothes-Shop </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="templates/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="templates/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templates/css/bootstrap.min.css">
    <link rel="stylesheet" href="templates/css/bootstrap.rtl.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="templates/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="templates/css/font-awesome.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href=templates/"css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="templates/css/owl.carousel.min.css">
    <link rel="stylesheet" href="templates/css/owl.theme.default.min.css">
    <!-- Main Menu CSS-->
    <link rel="stylesheet" href="templates/css/meanmenu.min.css">
    <!-- Nivo Slider CSS-->
    <link rel="stylesheet" href="templates/lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="templates/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="templates/css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="templates/css/style.css">
    <!-- Modernizr Js -->
    <script src="templates/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="wrapper-area">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Header Area Start Here -->
    <header>
        <div class="header-area-style2" id="sticker">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="account-wishlist">
                                <?php
                                $id = (int) $_SESSION['id'];

                                $query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
                                $fetch = $query->fetch_array ();
                                ?>
                                <ul>
                                    <!-- Button trigger modal -->
                                    <li><a href="libs/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>خروج</a></li>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a>:مرحبا</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs">
                            <div class="logo-area">
                                <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <ul class="header-cart-area">

                                <li>
                                    <div class="cart-area">
                                        <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="index.html"><img class="img-responsive" src="img/logo2.png" alt="logo"></a>
                            </div>
                            <div class="main-menu-area home2-sticky-area">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start Here -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active"><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login-registration.html">Login Registration</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
                                    </div>
                                </div>
                                <div class=" col-xs-4">
                                    <div class="form-group">
                                        <td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
                                    </div>
                                </div>

                            </div>

                    </div>
                    <div class="modal-footer">
                        <a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="تعديل"></a>
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">اغلاق</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>Boys</h1>
                            <ul>
                                <li><a href="index.html">Home</a> /</li>
                                <li><a href="#">Category</a> /</li>
                                <li>Boys</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Shop Page Area Start Here -->
        <div class="shop-page-area">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                <div class="inner-shop-top-left">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <div class="inner-shop-top-right">
                                    <ul>
                                        <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row inner-section-space-top">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">

                                    <?php

                                    $query = $conn->query("SELECT *FROM product WHERE category='Boys' ORDER BY product_id DESC") or die (mysqli_error());

                                    while($fetch = $query->fetch_array())
                                    {

                                    $pid = $fetch['product_id'];

                                    $query1 = $conn->query("SELECT * FROM stock WHERE product_id = '$pid'") or die (mysql_error());
                                    $rows = $query1->fetch_array();

                                    $qty = $rows['qty'];
                                    if($qty <= 5){

                                    }else{
                                    echo "<div class=\"col-sm-3 col-xs-6\">";
                                    echo "<div class=\"product-box1\">";
                                    echo "<ul class=\"product-social\">
                                        <li><a href=\"#\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></li>
                                    </ul>";
                                    echo "<div class=\"product-img-holder\">";
                                        echo "<a href='details.php?id=".$fetch['product_id']."'><img class=\"img-responsive\"  src='img/product/sale//".$fetch['product_image']."' alt=\"girls\"></a>";
                                        echo "<div class=\"product-content-holder\">
                                            <h3><a href='details.php?id=".$fetch['product_id']."'>".$fetch['product_name']."</a></h3>
                                            <span>".$fetch['product_price']."</span>
                                        </div>";
                                        echo "</div>
                                </div>
                                </div>";
                                }

                                }
                                ?>



                                </div>
                                <!-- List Style -->
                                <div role="tabpanel" class="tab-pane clear products-container" id="list-view">

                                    <?php

                                    $query = $conn->query("SELECT *FROM product WHERE category='Boys' ORDER BY product_id DESC") or die (mysqli_error());

                                    while($fetch = $query->fetch_array())
                                    {

                                        $pid = $fetch['product_id'];

                                        $query1 = $conn->query("SELECT * FROM stock WHERE product_id = '$pid'") or die (mysql_error());
                                        $rows = $query1->fetch_array();

                                        $qty = $rows['qty'];
                                        if($qty <= 5){

                                        }else{
                                            echo "<div class=\"col-lg-12 col-md-12 col-sm-4 col-xs-12\">";
                                            echo "<div class=\"product-box2\">";
                                            echo "<div class=\"media\">";
                                            echo "<a class=\"pull-left\" href=\"#\">
                                                    <img class=\"img-responsive\" src='img/product/sale//".$fetch['product_image']."' alt=\"boys\">
                                                </a>";
                                            echo "<div class=\"media-body\">
                                                    <div class=\"product-box2-content\">
                                                        <h3><a href='details.php?id=".$fetch['product_id']."'>".$fetch['product_name']."</a></h3>
                                                        <span>".$fetch['product_price']."</span>
                                                        <p>".$fetch['description']."</p>
                                                    </div>";
                                            echo "<ul class=\"product-box2-cart\">
                                                        <li><a href=\"#\">Add To Cart</a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i></a></li>
                                                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></li>
                                                    </ul>";
                                            echo "</div>
                                            </div>
                                        </div>
                                    </div>";
                                        }

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page Area End Here -->
       <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area">
                <div class="footer-area-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>Information</h3>
                                    <ul class="info-list">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Manufacturers</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Terms & condition</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>My Account</h3>
                                    <ul class="info-list">
                                        <li><a href="login-registration.html">My Account</a></li>
                                        <li><a href="login-registration.html">Login</a></li>
                                        <li><a href="wishlist.html">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="cart.html">View Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>Product Tag</h3>
                                    <ul class="tag-list">
                                        <li><a href="#">Winter</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Denime</a></li>
                                        <li><a href="#">Summer Style</a></li>
                                        <li><a href="#">Leather</a></li>
                                        <li><a href="#">Dress</a></li>
                                        <li><a href="#">Dress</a></li>
                                        <li><a href="#">Summer Style</a></li>
                                        <li><a href="#">Leather</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3>Stay With Us</h3>
                                    <p>Tmply dummy text of the printing and typesetting industry nummy ever.</p>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="newsletter-area">
                                        <h3>NewsLetter Sign Up!</h3>
                                        <div class="input-group stylish-input-group">
                                            <input type="text" class="form-control" placeholder="E-mail . . .">
                                            <span class="input-group-addon">
                                                    <button type="submit">
                                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    </button>  
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <p>© 2016 Spectra All Rights Reserved. Designed by<a href="http://spectraapps.com" target="_blank"> SpectraApps</a></p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <ul class="payment-method">
                                    <li>
                                        <a href="#"><img src="img/payment-method1.jpg" alt="payment-method"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment-method2.jpg" alt="payment-method"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment-method3.jpg" alt="payment-method"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment-method4.jpg" alt="payment-method"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Dialog Box Start Here-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-body">
                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">
                    <div class="product-details-info-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-left">
                                    <div class="tab-content">
                                        <div id="metro-related1" class="tab-pane fade active in">
                                            <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                        <div id="metro-related2" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                        <div id="metro-related3" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related1"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related1"></a>
                                        </li>
                                        <li>
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related2"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related2"></a>
                                        </li>
                                        <li>
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related3"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related3"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-right">
                                    <h3>Product Title Here</h3>
                                    <ul>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">$59.00</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus.</p>
                                    <div class="product-details-content">
                                        <p><span>SKU:</span> 0010</p>
                                        <p><span>Availability:</span> In stock</p>
                                        <p><span>Category:</span> Demo Products</p>
                                    </div>
                                    <ul class="product-details-social">
                                        <li>Share:</li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <ul class="inner-product-details-cart">
                                        <li><a href="#">Add To Cart</a></li>
                                        <li>
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                                <div class="input-group-btn-vertical">
                                                    <button type="button" class="btn btn-default quantity-plus"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-default quantity-minus"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="templates/js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="templates/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="templates/js/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="templates/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="templates/js/wow.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="templates/js/plugins.js" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="templates/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="templates/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- Actual Js -->
    <script src="templates/js/jquery.actual.min.js" type="text/javascript"></script>
    <!-- Nouislider Js -->
    <script src="templates/vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
    <!-- wNumb Js -->
    <script src="templates/js/wNumb.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="templates/js/main.js" type="text/javascript"></script>
</body>

</html>
