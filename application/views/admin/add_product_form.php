<div class="box-content">
    <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_product" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Product</legend>
            <h3 style="color: green">
                <?php 
                  $suss_mess=$this->session->userdata('success_message');
                  if ($suss_mess){
                      echo $suss_mess;
                      $this->session->unset_userdata('success_message');
                      
                  }
                
                ?>
              </h3>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Code </label>
                <div class="controls">
                    <input type="text" name="product_code" class="span6 typeahead" id="typeahead"  >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Name </label>
                <div class="controls">
                    <input type="text" name="product_name" class="span6 typeahead" id="typeahead"  >
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
                    <input type="text" name="product_price" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Quantity</label>
                <div class="controls">
                    <input type="text" name="product_quantity" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="textarea2">Product Short Description</label>
                <div class="controls">
                    <textarea name="product_short_description" class="cleditor" id="textarea2" rows="3"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="textarea2">Product Long Description</label>
                <div class="controls">
                    <textarea name="product_long_description" class="cleditor" id="textarea2" rows="3"></textarea>
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

