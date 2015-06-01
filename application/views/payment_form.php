<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-6">
            <div id="accordion" class="checkout">
                <h2><a href="#">Payment Method</a></h2>
                <div>
                    <p style="color: red">Please select the preferred payment method to use on this order.</p>
                    <form action="<?php echo base_url(); ?>checkout/confirm_order" method="post">
                    <table class="form">
                        <tbody>
                            <tr>
                                <td style="width: 1px;"><input type="radio" id="c_o_d" value="cod" name="payment_type"/></td>
                                <td><label for="tod">Cash On Delivery</label></td>
                            </tr>
                            <tr>
                                <td style="width: 1px;"><input type="radio" checked="checked" id="b_k_s" value="bks" name="payment_type"/></td>
                                <td><label for="cod">Bkash</label></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    <div class="buttons">
                        <div class="right"><input type="submit" name="btn" value="Confirm Order"></div>
                    </div>
                    </form>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>