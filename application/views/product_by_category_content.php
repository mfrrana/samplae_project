
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
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                     <?php
                                    foreach($all_published_product_by_category_id as $v_all_pub_pro_by_cat){
                                    ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                   
                                    <a href="<?php echo base_url();?>welcome/product_details/<?php echo $v_all_pub_pro_by_cat->product_id;?>">  <img src="<?php echo base_url().$v_all_pub_pro_by_cat->product_image; ?>" alt="" style="height: 200px; width: 180px" /> </a>
                                    
                                    <h2><?php echo $v_all_pub_pro_by_cat->product_price?></h2>
                                    <p><?php echo $v_all_pub_pro_by_cat->product_name?></p>
                                    <form action="<?php echo base_url(); ?>cart/add_to_cart/<?php echo $v_all_pub_pro_by_cat->product_id; ?>" method="post">

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
                                        <li><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_all_pub_pro_by_cat->product_id; ?>"><i class="fa fa-plus-square"></i>Product Details</a></li>
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