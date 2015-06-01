<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <div class="shipping text-center"><!--shipping-->
                        <img src="<?php echo base_url(); ?>images/home/shipping.jpg" alt="" />

                    </div><!--/shipping-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="<?php echo base_url(); ?>images/home/shipping.jpg" alt="" />

                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-6">
                        <div class="view-product">
                            <img src="<?php echo base_url() . $product_info->product_image; ?>" alt="" />

                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="product-information"><!--/product-information-->
                            <img src="<?php echo base_url(); ?>images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><?php echo $product_info->product_name ?></h2>
                            <p><b>Product Code:</b> <?php echo $product_info->product_code ?></p>

                            <span>
                                <span><?php echo $product_info->product_price ?></span>
                                <form action="<?php echo base_url(); ?>cart/add_to_cart/<?php echo $product_info->product_id; ?>" method="post">
                                    <label>Quantity:</label>
                                    <input type="text" value="1" name="qty"/>
                                    <button type="submit" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Buy Now
                                    </button>
                                </form>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> <?php echo $product_info->manufacturer_name; ?></p>

                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->

                    <div class="col-sm-12">

                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab"> Product Details</a></li>

                        </ul>

                    </div>
                    <div class="tab-content">

                        <div class="tab-pane fade" id="details" >

                            <div class="col-sm-12">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">


                                            <p><?php echo $product_info->product_long_description ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">	
                                <?php
                                foreach ($rand_published_product as $v_rand_pub_product) {
                                    ?>

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_rand_pub_product->product_id; ?>">     <img src="<?php echo base_url() . $v_rand_pub_product->product_image; ?>" alt="" style="height: 140px; width: 160px"/> </a>
                                                    <h2><?php echo $v_rand_pub_product->product_price ?></h2>
                                                    <p><?php echo $v_rand_pub_product->product_name ?></p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="item">	
                                <?php
                                foreach ($rand_published_product as $v_rand_product) {
                                    ?>

                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_rand_product->product_id; ?>">     <img src="<?php echo base_url() . $v_rand_product->product_image; ?>" alt="" style="height: 140px; width: 160px"/> </a>
                                                    <h2><?php echo $v_rand_product->product_price ?></h2>
                                                    <p><?php echo $v_rand_product->product_name ?></p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>			
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>