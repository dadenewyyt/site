<div class="col-md-12 col-md-store-content">
    <div class="col-md-12 pull-left">
        <p>
        <span class='tab_content_title'>Name your Store</span>

        </p>
    </div>
    <div class='row row-table-p col-md-12'>

        <div class='col-md-6'>
            <div class="col-md-10 col-md-offset-1" style="margin-top:5%;">
                                          
                
                <div class="form-group">

                    <img id="preview_store_image" height="80" width="80"  src="">

                    <input type="text" id='store_image_file_path' name="store_image_file_path" class='form-control' placeholder="No file selected" disabled="disabled"
                    style="margin-top: 13px;" />
                     <div class="fileUpload row btn btn-sm btn-primary">
                        <span>Upload Image</span>
                        <input id="imgfile_store" name="userfile[]" type="file" required class="upload" accept="image/*"/>
                    </div>
                </div>

                <div class="col-md-12 col-md-select"  style="margin-top: 13px;">
                    <div class="form-group row">

                        <span class='required_star'>*</span>
                        <label for="storename">Store Name</label>
                        <input type="text" id="storename" name='storename'  id='storename' length="10" class="form-control" required >
                        <p class="help-block">You can change your store name later.</p>
                    </div>
                </div>

            </div>

        </div>
        <div class='col-md-5' style="margin-top:2%;">
            <div class="form-group">
                <span class='required_star'>*</span><label for="store_descritpion">Store Description</label>
                <textarea class="form-control" name='store_description' id='store_description' rows="4"></textarea>
            </div>

        </div>
        <hr  class='hr_store_form'>
        <div class="form-group col-md-2 col-md-offset-5">
            <button id='btn_store_next_page' class="btn btn-primary btn-lg">Continue</button>                    
        </div>
       
    </div>

    </div>      
 