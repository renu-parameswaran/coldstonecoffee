<?php
$val = [];

for($i=1; $i<13; $i++) {
    $val[] = $_COOKIE[$i];
}
arsort($val);
$list = [];
foreach($val as $key => $value) {
    $list[] = $key+1;
}
$list = array_slice($list, 0 ,5);
?>

<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fashionista</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="home">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->
<header>
    <div class="header-container">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="global-table">
                            <div class="global-row">
                                <div class="global-cell">
                                    <div class="logo"> <a href="index.html" title="Fashionista" ><img src="img/logo/logo-1.png" alt="logo image" ></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-9 hidden-sm hidden-xs">
                        <div class="horizontal-menu">
                            <div class="global-table">
                                <div class="global-row">
                                    <div class="global-cell">
                                        <div class="visible-large">
                                            <div class="mega_main mega_main_menu" id="mega_main_menu_first">
                                                <div class="menu_holder">
                                                    <div class="menu_inner">
                                                        <nav>
                                                            <ul class="mega_main_menu_ul" id="mega_main_menu_ul_first">
                                                                <li class="menu-item"> <a class="item_link" href="index.html"> <span class="link_content"> <span class="link_text">Home</span> </span> </a> </li>
                                                                <li class="menu-item active"> <a class="item_link" href="shop.html"> <span class="link_content"> <span class="link_text">Shop</span> </span> </a> </li>
                                                                <li class="menu-item"> <a class="item_link" href="about.html"> <span class="link_content"> <span class="link_text">About</span> </span> </a> </li>
                                                                <li class="menu-item"> <a class="item_link" href="news.html"> <span class="link_content"> <span class="link_text">News</span> </span> </a> </li>
                                                                <li class="menu-item"> <a class="item_link" href="contact.html"> <span class="link_content"> <span class="link_text">Contact</span> </span> </a> </li>
                                                                <li class="menu-item"> <a class="item_link" href="login.html"> <span class="link_content"> <span class="link_text">Login</span> </span> </a> </li>
                                                                <li class="menu-item"> <a class="item_link" href="user.html"> <span class="link_content"> <span class="link_text">User</span> </span> </a> </li>

                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 hidden-md hidden-lg">
                        <div class='mobile-menu-area'>
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.html">Home</a> </li>
                                    <li><a href="shop.html">Shop</a> </li>
                                    <li><a href="about.html">About</a>
                                    <li><a href="news.html">News</a> </li>
                                    <li><a href="contact.html">Contact</a> </li>
                                    <li><a href="login.html">Login</a> </li>
                                    <li><a href="user.html">User</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clear"></div>
<div class="shop-header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="shop-header-title">
                    <h1>Shop All Products</h1>
                    <div class="shop-menu">
                        <ul>
                            <li><a href="shop.html">All</a></li>
                            <li><a href="recent.html">Last 5 visited</a></li>
                            <li><a href="most.html" class="active">Most Visisted</a></li>
                            <li><a href="#">Price: Low - High</a></li>
                            <li><a href="#">Price: High - Low</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-container shop-container">
    <div class="container">
        <div class="all-product-list-grid-area"></div>
        <div class="row">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="grid">
                    <div class="ma-bestsellerproductslider-container">
                        <?php
                        $string = file_get_contents("products.json");
                        $json1 = json_decode($string, TRUE);

                            foreach($list as $val) {
                                $val = 'product' . $val;
                                $id = $json1[$val]['id'];
                                $name = $json1[$val]['name'];
                                $price = $json1[$val]['price'];
                                $mrp = $json1[$val]['mrp'];

                                print '<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                        <div class="single-item">
                            <div class="s-product-img"> <a href="#"> <img alt="" src="img/product/' . $id . '.jpg" class="primary-image"> <img alt="" src="img/product/' . $id . '.jpg" class="secondary-image"> </a>
                                <div class="price-rate">
                                    <div class="global-table">
                                        <div class="global-row">
                                            <div class="global-cell">
                                                <div class="hover-view-content">
                                                    <a href="products.html?id=' . $id . '"><h3> Price </h3></a>
                                                    <div class="price-box">
                                                        <p class="special-price"><span class="price">' . $price . '</span></p>
                                                        <p class="old-price"> <span class="price"><del>' . $mrp . '</del></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="products.html?id=' . $id . '">' . $name . '</a>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12 fix">
                    <div class="bottom_menu">
                        <div class="menu-customer-care-container">
                            <nav>
                                <ul class="nav_menu">
                                    <li class="menu-item"> <a href="index.html">Home</a> </li>
                                    <li class="menu-item"> <a href="shop.html">Shop </a> </li>
                                    <li class="menu-item"> <a href="about.html">About</a> </li>
                                    <li class="menu-item"> <a href="news.html">News</a> </li>
                                    <li class="menu-item"> <a href="contact.html">Contact</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="copyright-info"> Copyright &copy; 2017 <a href="http://lvivek.com/">Lakshmanan Vivek </a> All Rights Reserved </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
</body>
</html>