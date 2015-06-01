<script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
   // alert(e);
    
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(given_text,objID)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
        
                  serverPage='<?php echo base_url();?>welcome/ajax_email_check/'+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                                            document.getElementById(objID).innerHTML = xmlhttp.responseText;
                                            if(xmlhttp.responseText == 'Email Address Alredy Exists' )
                                            {
                                                document.getElementById('rbtn').disabled=true;
                                            }
                                           
                                            else
                                            {
                                                document.getElementById('rbtn').disabled=false;
                                            }
			document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}
//-->
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-6">
            <?php echo validation_errors(); ?>
            <form role="form" action="<?php echo base_url();?>welcome/save_user" method="post">

                <fieldset>
                    <legend>Provide Below Information to Register</legend>
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
                    <input type="text" class="form-control" id="exampleInputFname1" placeholder="Enter First Name" name="f_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputLname">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputLname" placeholder="Enter Last Name" name="l_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="e_mail" onblur="makerequest(this.value,'res');"/><span style="color:red" id="res"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="u_pass">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="m_obile" onblur="makerequest(this.value,'res');"/><span style="color:red" id="res"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="a_ddress">
                </div>
                <button type="submit" class=" confirm_order_color confirm_order">Submit</button>
            </form>
        </div>
    </div>
</div>
<br>