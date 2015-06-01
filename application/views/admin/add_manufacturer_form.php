
<div class="box-content">
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_manufacturer" method="post">
        <fieldset>
            <legend>Add Manufacturer</legend>
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
                <label class="control-label" for="typeahead">Manufacturer Name</label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" name="manufacturer_name" id="typeahead"  data-provide="typeahead" data-items="4" >
                   
                </div>
            </div>
           
            <div class="control-group">
                <label class="control-label" for="textarea2">Manufacturer Description</label>
                <div class="controls">
                    <textarea class="cleditor" name="manufacturer_description" id="textarea2" rows="3"></textarea>
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
                <button type="submit" class="btn btn-primary">Add Manufacturer</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>


