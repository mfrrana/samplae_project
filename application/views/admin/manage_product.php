<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Manage Product</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>

                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_product as $v_product) {
                        ?>
                        <tr>
                            <td><?php echo $v_product->product_id; ?></td>

                            <td class="center"><?php echo $v_product->product_name; ?></td>
                            <?php
                            if ($v_product->publication_status == 1) {
                                ?>
                                <td class="center">Published</td>
                                <?php
                            } else {
                                ?> 
                                <td class="center">Unpublished</td>

                            <?php } ?>

                            <td class="center">
                                <?php
                                if ($v_product->publication_status == 1) {
                                    ?>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_product/<?php echo $v_product->product_id;?>" title="Unpublished">
                                        <i class="icon-arrow-down icon-red"></i>  

                                    </a>
                                    <?php
                                } else {
                                    ?>
                                <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_product/<?php echo $v_product->product_id;?>" title="Published">
                                <i class="icon-arrow-up icon-white"></i>
                                    </a>
                                <?php } ?>

                                <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_product/<?php echo $v_product->product_id;?>" title="Edit  ">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_product/<?php echo $v_product->product_id;?>" title="Delete" onclick="return checkDelete()">
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