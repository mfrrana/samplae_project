<div class="box-content">
    <form name="edit_product" class="form-horizontal" action="<?php echo base_url(); ?>super_admin/update_product/<?php echo $product_info->product_id;?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Edit Product</legend>
           
              </h3>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Code </label>
                <div class="controls">
                    <input type="text" name="product_code" class="span6 typeahead" id="typeahead" value="<?php echo $product_info->product_code;?>" >
                    <input type="hidden" name="product_id" class="span6 typeahead" id="typeahead" value="<?php echo $product_info->product_id ?>"  >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Name </label>
                <div class="controls">
                    <input type="text" name="product_name" class="span6 typeahead" id="typeahead" value="<?php echo $product_info->product_name;?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Manufacturer Name </label>
                <div class="controls">
                    <select name="manufacturer_id">
                        <option>Select Manufacturer Name</option>
                        <?php
                        foreach ($all_published_manufacturer as $v_published_manufacturer) {
                            ?>

                            <option value="<?php echo $v_published_manufacturer->manufacturer_id ?>"><?php echo $v_published_manufacturer->manufacturer_name ?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Category Name </label>
                <div class="controls">
                    <select name="category_id">
                        <option>Select Category Name</option>
                        <?php
                        foreach ($all_published_category as $v_published_category) {
                            ?>
                            <option value="<?php echo $v_published_category->category_id; ?>"><?php echo $v_published_category->category_name; ?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="typeahead">Product Price</label>
                <div class="controls">
                    <input type="text" name="product_price" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $product_info->product_price;?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Quantity</label>
                <div class="controls">
                    <input type="text" name="product_quantity" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $product_info->product_quantity;?>" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="textarea2">Product Short Description</label>
                <div class="controls">
                    <textarea name="product_short_description" class="cleditor" id="textarea2" rows="3"><?php echo $product_info->product_short_description;?> </textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="textarea2">Product Long Description</label>
                <div class="controls">
                    <textarea name="product_long_description" class="cleditor" id="textarea2" rows="3"><?php echo $product_info->product_long_description;?></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Image</label>
                <div class="controls">
                    <input type="file" name="product_image" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Publication Status</label>
                <div class="controls">
                    <select name="publication_status">
                        <option> Select Publication Status </option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add Product</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>

<script type="text/javascript">
document.forms['edit_product'].elements['manufacturer_id'].value='<?php echo $product_info->manufacturer_id; ?>';
</script>
<script type="text/javascript">
document.forms['edit_product'].elements['category_id'].value='<?php echo $product_info->category_id; ?>';
</script>
<script type="text/javascript">
document.forms['edit_product'].elements['publication_status'].value='<?php echo $product_info->publication_status; ?>';
</script>