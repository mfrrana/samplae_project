<div class="box-content">
    
    <form name="edit_manufacturer_form" class="form-horizontal" action="<?php echo base_url(); ?>super_admin/update_manufacturer" method="post">
        <fieldset>
            <legend>Edit Manufacturer</legend>

            <div class="control-group">
                <label class="control-label" for="typeahead">Manufacturer Name </label>
                <div class="controls">
                    <input type="text" name="manufacturer_name" class="span6 typeahead" id="typeahead" value="<?php echo $manufacturer_info->manufacturer_name ?>"  >
                    <input type="hidden" name="manufacturer_id" class="span6 typeahead" id="typeahead" value="<?php echo $manufacturer_info->manufacturer_id ?>"  >

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="textarea2">Manufacturer Description</label>
                <div class="controls">
                    <textarea class="cleditor" name="manufacturer_description" id="textarea2" rows="3"> <?php echo $manufacturer_info->manufacturer_description ?> </textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="fileInput">Publication Status</label>
                <div class="controls">
                    <select name="publication_status" v>
                        <option>Select Status</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div> 
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>


<script type="text/javascript">
    document.forms['edit_manufacturer_form'].elements['publication_status'].value = '<?php echo $manufacturer_info->publication_status ?>';
</script>