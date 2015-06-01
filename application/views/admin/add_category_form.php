
<div class="box-content">
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_category" method="post">
        <fieldset>
            <legend>Add Category</legend>
            <legend>
            <h2 style="color: green">
                <?php 
                $sus_msg= $this->session->userdata('success_msg');
                if($sus_msg){
                    
                    echo $sus_msg;
                    $this->session->unset_userdata('success_msg');
                }
                ?>
                
            </h2>
            </legend>
            <div class="control-group">
                <label class="control-label" for="typeahead">Category Name</label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" name="category_name" id="typeahead"  data-provide="typeahead" data-items="4" >
                   
                </div>
            </div>
           
            <div class="control-group">
                <label class="control-label" for="textarea2">Category Description</label>
                <div class="controls">
                    <textarea class="cleditor" name="category_description" id="textarea2" rows="3"></textarea>
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="fileInput">Publication Status</label>
                <div class="controls">
                    <select name="publication_status">
                        <option>Select Status</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div> 
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add Category</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>


