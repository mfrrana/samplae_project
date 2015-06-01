
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <?php
                $exc = $this->session->userdata('exception');

                if ($exc) {
                    echo $exc;
                    $this->session->unset_userdata('exception');
                }
                ?>
                </h3>
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="<?php echo base_url(); ?>welcome/user_login_check" method="post">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="e_mail">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="u_pass">
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-2">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="#">
                            <!--<input type="text" placeholder="Name"/>
                            <input type="email" placeholder="Email Address"/>
                            <input type="password" placeholder="Password"/>-->
                        <p><a href="<?php echo base_url(); ?>welcome/sign_up"><button type="button" class="btn btn-default">Signup</button></a></p>
                    </form>
                </div><!--/sign up form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-3">
                <div class="signup-form"><!--sign up form-->
                    <h2 style="color: red">You can Place your order as a GUEST</h2>
                    <form action="<?php echo base_url();?>welcome/cart_content">
                        <!--<input type="text" placeholder="Name"/>
                        <input type="email" placeholder="Email Address"/>
                        <input type="password" placeholder="Password"/>-->
                        <button type="submit" class="btn btn-default">Go</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->