    <div class="box-content">
    <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_slider_panel" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Slider To Display</legend>
            <h3 style="color: green">
              <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
              </h3>
            <div class="control-group">
                <label class="control-label" for="typeahead">Heading</label>
                <div class="controls">
                    <input type="text" name="heading_name" class="span6 typeahead" id="typeahead"  >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Caption</label>
                <div class="controls">
                    <input type="text" name="caption_description" class="span6 typeahead" id="typeahead"  >
                </div>
            </div>
        
            <div class="control-group">
                <label class="control-label" for="textarea2">Description</label>
                <div class="controls">
                    <textarea name="description" class="cleditor" id="textarea2" rows="3"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Slider Image</label>
                <div class="controls">
                    <input type="file" name="slider_image" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="typeahead">Publication Status</label>
                <div class="controls">
                    <select name="activation_status">
                        <option> Select Publication Status </option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add Slider</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>










