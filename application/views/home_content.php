<!----dynamic slide start from here -->


<section id="slider">
    <div class="contianer">
        <?php if ($slider_conten) {
            ?>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <!-- Carousel================================================== -->
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            $i = 1;
                            foreach ($published_slider as $v_slider) {
                                ?>
                                <li data-target="#slider-carousel" data-slide-to="<?php echo $i; ?>" class="<?php
                                if ($i == 1) {
                                    echo 'active';
                                    $i++;
                                } else {
                                    echo '';
                                }
                                ?>"></li>
                                <?php } ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php
                            $j = 1;
                            foreach ($published_slider as $v_slider) {
                                ?>
                                <div class="<?php
                                if ($j == 1) {
                                    echo 'active item';
                                    $j++;
                                } else {
                                    echo 'item';
                                }
                                ?>">
                                    <div class="col-sm-6">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2><?php echo $v_slider->heading_name ?></h2>
                                        <p><?php echo $v_slider->description; ?></p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php echo $v_slider->caption_description ?></a></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo base_url() . $v_slider->slider_image; ?>" alt="First slide">

                                    </div>
                                </div>



                                <!--<div class="item">
                                               <img src="<?php echo base_url() . $v_slider->slider_image; ?>" alt="Second slide">
                                               <div class="container">
                                                              <div class="carousel-caption">
                                                                             <h1><?php echo $v_slider->heading_name; ?></h1>
                                                                             <p><?php echo $v_slider->description; ?></p>
                                                                             <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php echo $v_slider->caption_description ?></a></p>
                                                              </div>
                                               </div>
                                </div>-->

                            <?php } ?>
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div><!-- /.carousel -->


                </div>
            <?php } ?>
        </div>
    </div>

</section>

<!--slider finished here-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->


                        <div class="panel panel-default">
                            <?php
                            foreach ($all_published_category as $v_category) {
                                ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?php echo base_url(); ?>welcome/products_by_category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></h4>
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



                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php
                    foreach ($all_published_product as $v_product) {
                        ?>
                        <div class="col-sm-4">

                            <div class="product-image-wrapper">

                                <div class="single-products">

                                    <div class="productinfo text-center">
                                        <a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_product->product_id; ?>">  <img src="<?php echo base_url() . $v_product->product_image; ?>" alt="" style="height: 200px; width: 180px" /> </a>
                                        <h2><?php echo $v_product->product_price; ?></h2>
                                        <p><?php echo $v_product->product_name; ?></p>
                                        <form action="<?php echo base_url(); ?>cart/add_to_cart/<?php echo $v_product->product_id; ?>" method="post">

                                            <input type="hidden" value="1" name="qty"/>
                                            <button type="submit" class="btn btn-default add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Buy Now
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_product->product_id; ?>"><i class="fa fa-plus-square"></i>Product Details</a></li>
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