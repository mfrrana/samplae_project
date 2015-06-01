
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                        <div class="panel panel-default">
                            <?php foreach ($all_published_category as $v_publish_category) { ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?php echo base_url(); ?>welcome/products_by_category/<?php echo $v_publish_category->category_id; ?>"><?php echo $v_publish_category->category_name; ?></a></h4>
                                </div>
                            <?php } ?>
                        </div>

                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <?php
                            foreach ($all_published_manufacturer as $v_manufacturer) {
                                ?>
                                <ul class="nav nav-pills nav-stacked ">
                                    <h4>   <li><a href="<?php echo base_url(); ?>welcome/products_by_manufacturer/<?php echo $v_manufacturer->manufacturer_id; ?>"> <?php echo $v_manufacturer->manufacturer_name; ?></a></li> </h4>

                                </ul>
                            <?php } ?>
                        </div>
                    </div><!--/brands_products-->



                    <div class="shipping text-center"><!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Search Items</h2>
                    <?php
                    foreach ($product_by_search as $v_pro_by_search) {
                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">

                                        <a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_pro_by_search->product_id; ?>">  <img src="<?php echo base_url() . $v_pro_by_search->product_image ?>" alt="" style="height: 200px; width: 180px" /> </a>

                                        <h2><?php echo $v_pro_by_search->product_price ?></h2>
                                        <p><?php echo $v_pro_by_search->product_name ?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>