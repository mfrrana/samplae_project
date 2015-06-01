
	<section id="cart_items">
		<div class="container">
			

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="login-form "><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="<?php echo base_url(); ?>welcome/user_login_check" method="post" >
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="e_mail">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="u_pass">
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->

			<div class="register-req">
                            <p style="color: red; font-size: 20px;"><b>Place Your Order as a GUEST</b></p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<!--<div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form>
								<input type="text" placeholder="Display Name">
								<input type="text" placeholder="User Name">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
							</form>
							<a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Continue</a>
						</div>
					</div>-->
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<p></p>
							<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-6">
            <?php echo validation_errors(); ?>
            <form role="form" action="<?php echo base_url(); ?>checkout/save_shipping" method="post">

                <fieldset>
                    <legend>Bill To</legend>
                    <h3>
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>
                </fieldset>
                <div class="form-group">
                    <label for="exampleInputFname">First Name</label>
                    <input type="text" class="form-control" id="exampleInputFname1" placeholder="Enter First Name" name="first_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputLname">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputLname" placeholder="Enter Last Name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email_address">
                </div>
                   <div class="form-group">
                    <label class="control-label" for="textarea2">Shipping Address</label>
                    <div class="controls">
                        <textarea class="form-control" name="address" id="textarea3" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputLname">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputLname" placeholder="Contact Number" name="mobile_no">
                </div>
                
                <button type="submit" class="confirm_order"> <a class="confirm_order_color"  href="<?php echo base_url();?>checkout/payment_form">Confirm Order</a></button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
 </div>			
</div>
</div>
</section>
			
