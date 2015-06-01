

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Invoice #842393</title>
<script type="text/css" >

body,td,input,select {
    font-family: Tahoma;
    font-size: 11px;
    color: #000000;
}

form {
    margin: 0px;
}

a {
    color: #000000;
}

#wrapper {
    width: 600px;
}

#invoicetoptables {
    width: 100%;
    background-color: #cccccc;
    border-collapse: seperate;
}

td#invoicecontent {
    background-color: #ffffff;
    color: #000000;
}

.unpaid {
    font-size: 16px;
    color: #cc0000;
    font-weight: bold;
}

.paid {
    font-size: 16px;
    color: #779500;
    font-weight: bold;
}

.refunded {
    font-size: 16px;
    color: #224488;
    font-weight: bold;
}

.cancelled {
    font-size: 16px;
    color: #cccccc;
    font-weight: bold;
}

.collections {
    font-size: 16px;
    color: #ffcc00;
    font-weight: bold;
}

#invoiceitemstable {
    width: 100%;
    background-color: #cccccc;
    border-collapse: seperate;
}

td#invoiceitemsheading {
    background-color: #efefef;
    color: #000000;
    font-weight: bold;
    text-align: center;
}

td#invoiceitemsrow {
    background-color: #ffffff;
    color: #000000;
}

.creditbox {
    border: 1px dashed #cc0000;
    font-weight: bold;
    background-color: #FBEEEB;
    text-align: center;
    width: 100%;
    padding: 10px;
    color: #cc0000;
    margin-left: auto;
    margin-right: auto;
}
</script>
</head>
<body bgcolor="#efefef">


<table width="100%" id="wrapper" cellspacing="1" cellpadding="10" bgcolor="#cccccc" align="center"><tbody><tr><td bgcolor="#ffffff">

<table width="100%"><tbody><tr><td width="50%">

<p><h1>LOGO</h1></p>
<br><br>
<br>
<br>


</td><td width="50%" align="center">

<font class="unpaid">Unpaid</font><br>
<form method="post" action="#"><select name="gateway" size="1" onChange="submit()"><option value="tco" selected> Cash On Delivery</option></select></form>





</td></tr></tbody></table>

<br>


<table width="100%" id="invoicetoptables" cellspacing="0"><tbody><tr>
<td colspan="2" id="invoicecontent" style="border:1px solid #cccccc">

<table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables"><tbody><tr>
  <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

<strong>ApplianceBD</strong><br>
<h3>Md. Rupon</h3>
<span>+880 1611 269128 </span><br>
<span>xyz@gmail.com</span>
</td>
      <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

<strong>Ship To</strong><br>
<?php //echo $shipping_info->company_name;?><?php echo $shipping_info->first_name;?> 
<?php echo $shipping_info->last_name;?><br>
<?php echo $shipping_info->mobile_no;?><br>
<?php echo $shipping_info->email_address;?><br>
<?php echo $shipping_info->address;?> <br>

</td>
</tr>
</tbody></table>

</td>
<!--
<td width="50%" id="invoicecontent" style="border:1px solid #cccccc;border-left:0px;">
<table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables">
<tr>
<td id="invoicecontent" valign="top" style="border:1px solid #cccccc">
<strong>Pay To</strong><br />

</td></tr></table>
</td>
-->
</tr></tbody></table>
<br><br>
<br>
<br>

<br><br>


<p><strong>Invoice #inv-00<?php echo $order_info->order_id;?></strong><br>


<!--
    Order Details Start
-->
   
        
        <h2 class="heading-title"><span>Order Details</span></h2>
       
                <table width="100%" border="1">
                    <thead>
                        <tr>
                            <td class="name">Product Name</td>
                            <td class="quantity">Quantity</td>
                            <td class="price">Unit Price</td>
                            <td class="total">Sub-Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total=''; ?>
                        <?php foreach ($order_details_info as $v_contents) { ?>
                        <tr>
                            <td class="name"><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_contents->product_id; ?>"><?php echo $v_contents->product_name; ?></a>
                                <div></div>
                            </td>
                            <td class="quantity">
                                   <?php echo $v_contents->product_sales_quantity; ?>     
                            </td>
                            <td class="price">BDT  <?php echo $v_contents->product_price; ?></td>
                            <td class="total">BDT 
                                <?php 
                                    
                                    $sub_total=$v_contents->product_sales_quantity * $v_contents->product_price; 
                                    echo $sub_total;
                                    
                                ?></td>
                        </tr>
                        <?php $total=$total+$sub_total; ?>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
          
                <table width="100%">
                    <tbody>
                        <tr>
                             <td ></td>
                             <td ></td>
                             <td ></td>
                             <td ></td>
                            <td class="right"><b>Total :</b></td>
                            <td class="right numbers">BDT <?php echo $total; ?></td>
                        </tr>
                        <tr>
                            <td ></td>
                             <td ></td>
                             <td ></td>
                             <td ></td>
                            <td class="right"><b>VAT (15%):</b></td>
                            <td class="right numbers">
                                <?php 
                                    $vat=($total*15)/100;
                                    echo 'BDT'.' '. $vat;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td co ></td>
                             <td ></td>
                             <td ></td>
                             <td ></td>
                            <td class="right numbers_total"><b>Grand Total:</b></td>
                            <td class="right numbers_total">BDT 
                                <?php 
                                    $grand_total=$total+$vat;
                                    /*$sdata=array();
                                    $sdata['grand_total']=$grand_total;
                                    $this->session->set_userdata($sdata);*/
                                    echo $grand_total; 
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
           
          
   
<!-- Order Details End-->
<br><br>
<br>
<br>

<br><br>

-------------- <br>
Signature
</table>
</body></html>