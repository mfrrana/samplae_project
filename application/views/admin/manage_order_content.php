<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i>Manage Order</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3 style="color: green">
            <?php 
                $message=$this->session->userdata('message');
                if($message) {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
            ?>
            </h3>
            <h3 style="color: red">
            <?php 
                $ex_message=$this->session->userdata('ex_message');
                if($ex_message) {
                    echo $ex_message;
                    $this->session->unset_userdata('ex_message');
                }
            ?>
            </h3>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Order Status</th>
                      <!-- Payment Status-->
                        <th>Payment Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($order_info as $v_order) { ?>
                    <tr>
                        <td><?php echo $v_order->order_id; ?></td>
                        <td class="center"><?php echo $v_order->first_name.nbs(2).$v_order->last_name; ?></td>
                        <td class="center"><?php echo $v_order->order_total; ?></td>
                        <td class="center"><?php echo $v_order->order_status; ?></td>
                      <!-- payment status-->
                        <td class="center"><?php echo $v_order->payment_type; ?></td>
                        <td class="center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/view_order_invoice/<?php echo $v_order->order_id; ?>" title="View Invoice">
                                <i class="icon-zoom-in icon-white"></i>                                          
                            </a>
                            <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/download_order_invoice/<?php echo $v_order->order_id; ?>" title="Download Invoice">
                                <i class="icon-arrow-down icon-white"></i>                                          
                            </a>
                            
                            <!-- super_admin/edit_payment_status-->
                            
                            <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/edit_order_status/<?php echo $v_order->order_id; ?>" title="Edit Order Status">
                                <i class="icon-edit icon-white"></i>                                     
                            </a>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_order/<?php echo $v_order->order_id; ?>" title="Delete" onclick="return checkDelete();" >
                                <i class="icon-trash icon-white"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->

