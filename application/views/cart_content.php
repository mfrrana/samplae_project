
<?php
$contents = $this->cart->contents();

/* echo '<pre>';
  print_r($contents);
  exit(); */
?>

<section id="cart_items">
    <div class="container">

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contents as $v_contents) {
                        ?>
                        <tr>
                            <td class="cart_product">
                                <img src="<?php echo base_url() . $v_contents['image'] ?>" alt="" style="height: 80px; width: 80px;"></a>
                            </td>
                            <td class="cart_description">
                                <h4><?php echo $v_contents['name'] ?></h4>
                                <p>code: <?php echo $v_contents['code'] ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?php echo $v_contents['price'] ?></p>
                            </td>



                            <td class="cart_quantity">
                                <div class="cart_quantity_button">


                                    
                                        <form action="<?php echo base_url(); ?>cart/update_cart/<?php echo $v_contents['rowid']; ?>" method="post">
                                          
                                            
                                       
                                                
                                        <!--</form><br>-->
                                    <!--<form action="<?php // echo base_url(); ?>cart/deduct_from_cart/<?php // echo $v_contents['rowid']; ?>" method="post">-->
                                         
                                        <!--<input class="cart_quantity_input" type="hidden" name="qty2" value="<?php // echo $v_contents['qty'] ?>" autocomplete="off" size="2">-->
                                           <a class="cart_quantity_up" href=""><input type="submit" name="btn1" value="+" class="btn btn-sm btn-success glyphicon-upload"></a>
					
					<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $v_contents['qty'] ?>" autocomplete="off" size="2">				
											
					<a class="cart_quantity_down" href=""><input type="submit" name="btn2" value="-" class="adjust btn btn-sm btn-success glyphicon-upload"></a>
                                                 
                                        </form>
                                        
                                </div>
                            </td>



                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo $v_contents['subtotal'] ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="<?php echo base_url(); ?>cart/delete_cart/<?php echo $v_contents['rowid']; ?>"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">

    <div class="container">



        <div class="col-sm-6 col-sm-offset-6">
            <div class="total_area">
                <ul>
                    <li>Cart Sub Total <span><?php echo $this->cart->total(); ?></span></li>
                    <li>VAT 15%<span><?php
                            $vat = ($this->cart->total() * 15) / 100;
                            echo $vat;
                            ?></span></li>
                    <li>Home Delivery <span>Free</span></li>
                    <li style="font-family: 'Lobster', cursive; font-size: 30px; color: red">Grand Total <span ><?php
                            $grand_total = $this->cart->total() + $vat;
                            $sdata = array();
                            $sdata['grand_total'] = $grand_total;
                            $this->session->set_userdata($sdata);
                            echo $grand_total;
                            ?></span></li>
                </ul>
                <a class="btn big btn-default shipping_btn update" href="<?php echo base_url(); ?>welcome">Continue Shopping</a></button>
                <a class="btn btn-default shipping_btn check_out" href="<?php echo base_url(); ?>checkout">Check Out</a>
            </div>
        </div>

    </div>
</section><!--/#do_action-->