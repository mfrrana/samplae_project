<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ApplianceBd | <?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/price-range.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?php echo base_url(); ?>images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
</head><!--/head-->

<body>
    <header id="header"><!--header-->


        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?php echo base_url(); ?>welcome"><img src="<?php echo base_url(); ?>images/home/logo.png" alt="" /></a>
                        </div>

                        <!-- Dollar and Country portion here.-->

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav ">

                                <li><a href="<?php echo base_url(); ?>welcome/checkout_content"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/cart_content"><i class="fa fa-shopping-cart"></i> Cart(<?php echo $this->cart->total_items(); ?>)</a>

                                    <!--show cart drop down start from here-->     
                                    <ul role="menu" class="sub-menu ">
                                        <?php
                                        $contents = $this->cart->contents();

                                        /* echo '<pre>';
                                          print_r($contents);
                                          exit(); */
                                        ?>
                                        <div class="nav-cart-items">  
                                            <div class="nav-cart-item"> 
                                                <?php
                                                foreach ($contents as $v_contents) {
                                                    ?>

                                                    <img src="<?php echo base_url() . $v_contents['image'] ?>" style="height: 40px; width: 40px;" class="nav-cart-item-image">
                                                    <span style="" class="nav-cart-item-title"><?php echo $v_contents['name'] ?></span>
                                                    <span class="nav-cart-item-quantity"><form action="<?php echo base_url(); ?>cart/update_cart/<?php echo $v_contents['rowid']; ?>" method="post">
                                                            <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $v_contents['qty'] ?>" autocomplete="off" size="2">
                                                            <input type="" name="btn" value="Quantity" class="btn btn-sm btn-success glyphicon-upload"> 
                                                        </form>
                                                    </span>    </a> 
                                                <?php } ?>								  
                                            </div>
                                        </div>                              </ul>


                                </li>
                                <!--user login and logout option parameter start from here-->
                                <?php
                                $user_id = $this->session->userdata('user_id');
                                if ($user_id == NULL) {
                                    ?>

                                    <li><a href="<?php echo base_url(); ?>welcome/login_content"><i class="fa fa-lock"></i> Login</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li><a href="<?php echo base_url(); ?>welcome/logout"><i class="fa fa-lock"></i> Hello <?php echo $this->session->userdata('l_name'); ?> Logout</a></li>
                                <?php } ?>
                                <!--user login and logout option parameter ends here-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="<?php echo base_url(); ?>welcome" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                        foreach ($all_published_category as $v_all_pub_cat) {
                                            ?>
                                            <li><a href="<?php echo base_url(); ?>welcome/products_by_category/<?php echo $v_all_pub_cat->category_id; ?>"><?php echo $v_all_pub_cat->category_name; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Brands<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                        foreach ($all_published_manufacturer as $v_pub_brands) {
                                            ?>
                                            <li><a href="<?php echo base_url(); ?>welcome/products_by_manufacturer/<?php echo $v_pub_brands->manufacturer_id; ?>"><?php echo $v_pub_brands->manufacturer_name; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li> 
                                <li><a href="#" ><span class="fa fa-phone">+880 1611 269 128</span></a></li>
                                <li><a href="#" ><span class="fa fa-phone">+880 1911 269 128</span></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box box-content pull-right ">
                            <form action="<?php echo base_url(); ?>welcome/search" method="post">
                                <input type="text" name="search" placeholder="Search"/>

                                <button  type="submit" class="btn glyphicon glyphicon-search"> </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    <div>
        <?php echo $main_content; ?>
    </div>
    <footer id="footer"><!--Footer-->


        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">

                                <li><a href="<?php echo base_url(); ?>welcome/contact_us">Contact Us</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>welcome/terms_of_use">Terms of Use</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/privecy_policy">Privecy Policy</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/refund_policy">Refund Policy</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/billing_system">Billing System</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>welcome/company_information">Company Information</a></li>

                                <li><a href="<?php echo base_url(); ?>welcome/copyright">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About ApplianceBd</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2015 appliancebd.com All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->



    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>