<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Name your Store</span>

        </p>
    </div>
    <div class='row row-table-p col-md-12'>

        <div class='col-md-6'>
            <div class="col-md-10 col-md-offset-1" style="margin-top:5%;">
                <?php
                                $attributes = array(
                                    'class'=>'form',
                                    'id'=>'profile_edit',
                                );
                                echo form_open_multipart('/store/save_store',$attributes);
                ?>


                <div class="form-group">

                    <img id="preview_store_image" height="80" width="80"  src="">

                    <input type="text" id='store_image_file_path' name="store_image_file_path" class='form-control' placeholder="No file selected" disabled="disabled"
                    style="margin-top: 13px;" />
                     <div class="fileUpload btn btn-sm btn-primary">
                        <span>Upload Image</span>
                        <input id="imgfile_store" name="imgfile_store" type="file" class="upload" accept="image/*" />
                    </div>
                </div>

                <div class="col-md-12 col-md-select"  style="margin-top: 13px;">
                    <div class="form-group">
                        <span class='required_star'>*</span>
                        <label for="storename">Store Name</label>
                        <input type="text" id="storename" name='storename' class="form-control" required>
                        <p class="help-block">You can change your store name later.</p>
                    </div>
                </div>

            </div>

        </div>
        <div class='col-md-5' style="margin-top:2%;">
            <div class="form-group">
                <span class='required_star'>*</span><label for="descritpion">Store Description</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>

        </div>
        <hr  class='hr_store_form'>
        <div class="form-group col-md-2 col-md-offset-5">
            <button class="btn btn-primary btn-lg">Continue</button>
        </div>
        <?php  echo form_close(); ?>
    </div>
</div>